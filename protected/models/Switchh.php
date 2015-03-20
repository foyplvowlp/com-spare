<?php


class Switchh extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'switchh';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date, department_id, type, total, howto, finish', 'required'),
			array('department_id, total', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>45),
			array('howto', 'length', 'max'=>200),
			array('finish', 'length', 'max'=>33),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, date, department_id, type, total, howto, finish', 'safe', 'on'=>'search'),
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
			'type' => 'ประเภทที่ปฎิบัติ',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('department_id',$this->department_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('total',$this->total);
		$criteria->compare('howto',$this->howto,true);
		$criteria->compare('finish',$this->finish,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Switchh the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
