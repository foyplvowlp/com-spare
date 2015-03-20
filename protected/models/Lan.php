<?php

/**
 * This is the model class for table "lan".
 *
 * The followings are the available columns in table 'lan':
 * @property integer $id
 * @property string $date
 * @property integer $department_id
 * @property integer $total
 * @property string $howto
 * @property string $finish
 * @property string $type
 *
 * The followings are the available model relations:
 * @property Department $department
 */
class Lan extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, department_id, total, howto, type, finish', 'required'),
			array('department_id, total', 'numerical', 'integerOnly'=>true),
			array('howto, type', 'length', 'max'=>45),
			array('finish', 'length', 'max'=>33),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, department_id, total, howto, finish, type', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'department' => array(self::BELONGS_TO, 'Department', 'department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date' => 'ว/ด/ป',
			'department_id' => 'แผนก',
			'total' => 'จำนวน/ครั้ง',
			'howto' => 'วิธีปฏิบัติ',
			'finish' => 'ผลการปฏิบัติ',
			'type' => 'ประเภทที่ปฎิบัติ',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('total',$this->total);
		$criteria->compare('howto',$this->howto,true);
		$criteria->compare('finish',$this->finish,true);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Lan the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
