<?php

class UserIdentity extends CUserIdentity {

    const ERROR_USER_NOTAUTH = -1;

    private $_id;

    public function authenticate() {

        $username = strtolower($this->username);       //แปลงภาษาเป็นพิมพ์เล็ก
        $user = User::model()->find('LOWER(username)=?', array($username));     //ค้นหาไฟล์ในตาราง user ไหมถ้าเจอให้เก็บไว้ใน $user

        if ($user === null) {
            $this->errorCode = self::ERROR_USERNAME_INVALID;      //ถ้าไม่เจอ user ให้ error ERROR_USERNAME_INVALID
        } else if ($user->password !== $this->password) {           //ถ้าเจอให้มาตรวจสอบ Password
            $this->errorCode = self::ERROR_PASSWORD_INVALID;      //ถ้าไม่เจอ Password ให้ error ERROR_USERNAME_INVALID
        } else if ($user->role == '' or $user->role === NULL) {    //เช็คค่าถ้า role เป็นค่าว่าง หรือ ไม่ว่าง = เป็นจริง                        
            $this->errorCode = self::ERROR_USER_NOTAUTH;           //เช็คว่าสิทธิ์เป็นค่าว่าง
        } else {

            $this->_id = $user->username;
            $this->username = $user->username;
            $this->setState('role', $user->role);                 //setState แล้วไป getstate ใน main
            $this->setState('fullname', $user->fullname);         //setState แล้วไป getstate ใน main


            $this->errorCode = self::ERROR_NONE;

            //Update lastvisit
            $u = User::model()->findByPK($this->_id);      // ถ้าผ่านการ login ให้เก็บไว้ที่ตัวแปร
            $count = $u->countlogin;
            $date = date("Y-m-d H:i:s");
            User::model()->updateByPk(array($this->_id), array('lastlogin' => $date));
            User::model()->updateByPk(array($this->_id), array('countlogin' => $count + 1));
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    public function getId() {
        return $this->_id;
    }

}
