<?php

/**
 * This is the model class for table "seminars".
 *
 * The followings are the available columns in table 'seminars':
 * @property integer $id
 * @property integer $product_id
 * @property string $startdate
 * @property string $duration
 * @property string $publicdate
 * @property string $demovideo
 * @property integer $distance_learning
 * @property integer $live
 */
class Seminars extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'seminars';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, product_id, startdate, duration, publicdate, demovideo', 'required'),
			array('id, product_id', 'numerical', 'integerOnly'=>true),
			array('startdate, demovideo', 'length', 'max'=>50),
			array('duration', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, startdate, duration, publicdate, demovideo', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Product',
			'startdate' => 'Startdate',
			'duration' => 'Duration',
			'publicdate' => 'Publicdate',
			'demovideo' => 'Demovideo',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('startdate',$this->startdate,true);
		$criteria->compare('duration',$this->duration,true);
		$criteria->compare('publicdate',$this->publicdate,true);
		$criteria->compare('demovideo',$this->demovideo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Seminars the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
