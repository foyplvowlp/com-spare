<?php

/**
 * This is the model class for table "server".
 *
 * The followings are the available columns in table 'server':
 * @property integer $id
 * @property string $date
 * @property string $name
 * @property string $type
 * @property integer $department_id
 * @property integer $total
 * @property string $howto
 * @property string $finish
 *
 * The followings are the available model relations:
 * @property Department $department
 */
class Server extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'server';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('date, name, type, department_id, total, howto, finish', 'required'),
            array('department_id, total', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 100),
            array('type', 'length', 'max' => 45),
            array('howto', 'length', 'max' => 200),
            array('finish', 'length', 'max' => 33),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, date, name, type, department_id, total, howto, finish', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'department' => array(self::BELONGS_TO, 'Department', 'department_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'date' => 'ว/ด/ป',
            'name' => 'Server',
            'type' => 'ประเภทที่ปฎิบัติ',
            'department_id' => 'แผนก',
            'total' => 'จำนวน/ครั้ง',
            'howto' => 'วิธีปฏิบัติ',
            'finish' => 'ผลการปฏิบัติ',
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

        $criteria->compare('id', $this->id);
        $criteria->compare('date', $this->date, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('type', $this->type, true);
        $criteria->compare('department_id', $this->department_id);
        $criteria->compare('total', $this->total);
        $criteria->compare('howto', $this->howto, true);
        $criteria->compare('finish', $this->finish, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Server the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
