<?php

/**
 * This is the model class for table "repair".
 *
 * The followings are the available columns in table 'repair':
 * @property integer $id
 * @property integer $department_id
 * @property string $device
 * @property string $date
 * @property integer $total
 * @property string $detail
 * @property string $shop
 * @property string $status
 *
 * The followings are the available model relations:
 * @property Department $department
 */
class Repair extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'repair';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('department_id, date, total, detail', 'required'),
			array('department_id, total', 'numerical', 'integerOnly'=>true),
			array('device', 'length', 'max'=>8),
			array('detail', 'length', 'max'=>45),
			array('shop', 'length', 'max'=>6),
			array('status', 'length', 'max'=>27),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, department_id, device, date, total, detail, shop, status', 'safe', 'on'=>'search'),
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
			'department_id' => 'แผนก',
			'device' => 'อุปกรณ์',
			'date' => 'วันที่ส่งซ่อม',
			'total' => 'จำนวน',
			'detail' => 'รายละเอียด',
			'shop' => 'ร้านที่ส่ง',
			'status' => 'สถานะการซ่อม',
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
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('device',$this->device,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('total',$this->total);
		$criteria->compare('detail',$this->detail,true);
		$criteria->compare('shop',$this->shop,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Repair the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
