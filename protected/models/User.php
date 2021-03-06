<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $role
 * @property string $pname
 * @property integer $countlogin
 * @property string $lastlogin
 */
class User extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'user';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('username, password, fullname', 'required'),
            array('countlogin', 'numerical', 'integerOnly' => true),
            array('username, password, fullname, lastlogin', 'length', 'max' => 100),
            array('role', 'length', 'max' => 5),
            array('pname', 'length', 'max' => 9),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('username, password, fullname, role, pname, countlogin, lastlogin', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'username' => 'ชื่อผู้ใช้',
            'password' => 'รหัสผ่าน',
            'fullname' => 'ชื่อ-นามสกุล',
            'role' => 'ระดับ',
            'pname' => 'คำนำหน้า',
            'countlogin' => 'จำนวนที่เข้าสู่ระบบ',
            'lastlogin' => 'เข้าระบบครั้งล่าสุด',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('username', $this->username, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('fullname', $this->fullname, true);
        $criteria->compare('role', $this->role, true);
        $criteria->compare('pname', $this->pname, true);
        $criteria->compare('countlogin', $this->countlogin);
        $criteria->compare('lastlogin', $this->lastlogin, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return User the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
