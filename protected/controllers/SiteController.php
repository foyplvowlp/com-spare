<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {

        error_reporting(E_ALL ^ E_NOTICE);    //ซ่อน error Notice 
        $filtersForm = new FiltersForm;       //สร้างตัวแปร $filtersForm มารับค่าเพื่อทำตัวกรอง ต้องนำไฟล์ filters.php ไปไว้ในโฟลเดอร์ Component ก่อนเด้อ
        if (isset($_GET['FiltersForm']))      //เช็คว่ามีการกด Enter ที่ช่อง FiltersForm หรือไม่
            $filtersForm->filters = $_GET['FiltersForm'];


        $sql = "SELECT * FROM repair WHERE status = 'ส่งซ่อม' ORDER BY repair.date DESC";    //TbGridView
        $dataProvider1 = new CSqlDataProvider($sql, array(// เอา sql แปลงเป็น dataProvider
            'pagination' => array(
                'pageSize' => 10, // กำหนดให้หน้านึงแสดง 10 รายการ TbGridView
            ),
        ));




        $sql = "select r.device,count(total) as total from repair r group by r.device order by total DESC";    //Pie Graph

        $rawData = Yii::app()->db->createCommand($sql)->queryAll();      //exquit sql ก่อนเก็บไวที่ $rawData
        $filtersData = $filtersForm->filter($rawData);                   // สร้างตัวแปรที่ได้รับจากการ exquit sql มาเก็บใน filtersData
        // CArrayDataProvider ส่งค่าให้ grid โดยไม่ต้องผ่าน Models
        $dataProvider = new CArrayDataProvider($filtersData, array(// สร้าง dataProvider ใช้ CArrayDataProvider เข้าไปรับ $rawData
            'keyField' => 'device',
            'totalItemCount' => count($rawData), //  ใส่พารามิเตอร์ให้กับ CArrayDataProvider นับจำนวนแถว totalItemCount
            'sort' => array(//  sort การโค้สหัวตารางให้เลียงลำดับตัวอักษร 
                'attributes' => array_keys($rawData[0])       // array_keys($rawData[0] ทุกหัวตาราง
            )
        ));



        $total_server = Yii::app()->db->createCommand('select SUM(total) from server')->queryScalar();
        $total_switchh = Yii::app()->db->createCommand('select SUM(total) from switchh')->queryScalar();
        $total_computer = Yii::app()->db->createCommand('select SUM(total) from computer')->queryScalar();
        $total_internet = Yii::app()->db->createCommand('select SUM(total) from internet')->queryScalar();
        $total_printer = Yii::app()->db->createCommand('select SUM(total) from printer')->queryScalar();
        $total_wifi = Yii::app()->db->createCommand('select SUM(total) from wifi')->queryScalar();
        $total_ups = Yii::app()->db->createCommand('select SUM(total) from ups')->queryScalar();
        $total_program = Yii::app()->db->createCommand('select SUM(total) from program')->queryScalar();
        $total_website = Yii::app()->db->createCommand('select SUM(total) from website')->queryScalar();
        $total_viruss = Yii::app()->db->createCommand('select SUM(total) from viruss')->queryScalar();
        $total_lan = Yii::app()->db->createCommand('select SUM(total) from lan')->queryScalar();
        $total_report_etc = Yii::app()->db->createCommand('select SUM(total) from report_etc')->queryScalar();




        $total_server_howto = Yii::app()->db->createCommand('select howto from server order by date DESC')->queryScalar();
        $total_server_date = Yii::app()->db->createCommand('select date from server order by date DESC')->queryScalar();
        $total_switchh_howto = Yii::app()->db->createCommand('select howto from switchh order by date DESC')->queryScalar();
        $total_switchh_date = Yii::app()->db->createCommand('select date from switchh order by date DESC')->queryScalar();
        $total_computer_howto = Yii::app()->db->createCommand('select howto from computer order by date DESC')->queryScalar();
        $total_computer_date = Yii::app()->db->createCommand('select date from computer order by date DESC')->queryScalar();
        $total_internet_howto = Yii::app()->db->createCommand('select howto from internet order by date DESC')->queryScalar();
        $total_internet_date = Yii::app()->db->createCommand('select date from internet order by date DESC')->queryScalar();
        $total_printer_howto = Yii::app()->db->createCommand('select howto from printer order by date DESC')->queryScalar();
        $total_printer_date = Yii::app()->db->createCommand('select date from printer order by date DESC')->queryScalar();
        $total_wifi_howto = Yii::app()->db->createCommand('select howto from wifi order by date DESC')->queryScalar();
        $total_wifi_date = Yii::app()->db->createCommand('select date from wifi order by date DESC')->queryScalar();
        $total_ups_howto = Yii::app()->db->createCommand('select howto from ups order by date DESC')->queryScalar();
        $total_ups_date = Yii::app()->db->createCommand('select date from ups order by date DESC')->queryScalar();
        $total_program_howto = Yii::app()->db->createCommand('select howto from program order by date DESC')->queryScalar();
        $total_program_date = Yii::app()->db->createCommand('select date from program order by date DESC')->queryScalar();
        $total_website_howto = Yii::app()->db->createCommand('select howto from website order by date DESC')->queryScalar();
        $total_website_date = Yii::app()->db->createCommand('select date from website order by date DESC')->queryScalar();
        $total_viruss_howto = Yii::app()->db->createCommand('select howto from viruss order by date DESC')->queryScalar();
        $total_viruss_date = Yii::app()->db->createCommand('select date from viruss order by date DESC')->queryScalar();
        $total_lan_howto = Yii::app()->db->createCommand('select howto from lan order by date DESC')->queryScalar();
        $total_lan_date = Yii::app()->db->createCommand('select date from lan order by date DESC')->queryScalar();
        $total_meeting_howto = Yii::app()->db->createCommand('select howto from report_etc order by date DESC')->queryScalar();
        $total_meeting_date = Yii::app()->db->createCommand('select date from report_etc order by date DESC')->queryScalar();



        $this->render('index', array(
            'total_server' => $total_server,
            'total_switchh' => $total_switchh,
            'total_computer' => $total_computer,
            'total_internet' => $total_internet,
            'total_printer' => $total_printer,
            'total_wifi' => $total_wifi,
            'total_ups' => $total_ups,
            'total_program' => $total_program,
            'total_website' => $total_website,
            'total_viruss' => $total_viruss,
            'total_lan' => $total_lan,
            'total_report_etc' => $total_report_etc,
            'sql' => $sql,
            'dataProvider' => $dataProvider,
            'filtersForm' => $filtersForm,
            'dataProvider1' => $dataProvider1,
            'total_server_howto' => $total_server_howto,
            'total_server_date' => $total_server_date,
            'total_switchh_howto' => $total_switchh_howto,
            'total_switchh_date' => $total_switchh_date,
            'total_computer_howto' => $total_computer_howto,
            'total_computer_date' => $total_computer_date,
            'total_internet_howto' => $total_internet_howto,
            'total_internet_date' => $total_internet_date,
            'total_printer_howto' => $total_printer_howto,
            'total_printer_date' => $total_printer_date,
            'total_wifi_howto' => $total_wifi_howto,
            'total_wifi_date' => $total_wifi_date,
            'total_ups_howto' => $total_ups_howto,
            'total_ups_date' => $total_ups_date,
            'total_program_howto' => $total_program_howto,
            'total_program_date' => $total_program_date,
            'total_website_howto' => $total_website_howto,
            'total_website_date' => $total_website_date,
            'total_viruss_howto' => $total_viruss_howto,
            'total_viruss_date' => $total_viruss_date,
            'total_lan_howto' => $total_lan_howto,
            'total_lan_date' => $total_lan_date,
            'total_meeting_howto' => $total_meeting_howto,
            'total_meeting_date' => $total_meeting_date,
        ));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                        "Reply-To: {$model->email}\r\n" .
                        "MIME-Version: 1.0\r\n" .
                        "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}
