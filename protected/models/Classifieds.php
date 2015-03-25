<?php

/**
 * This is the model class for table "classifieds".
 *
 * The followings are the available columns in table 'classifieds':
 * @property integer $id
 * @property string $title
 * @property string $created_at
 * @property string $ending_at
 * @property string $email
 * @property string $fullname
 * @property string $tel
 * @property string $code
 * @property integer $isactive
 * @property string $mainbody_text
 * @property integer $category
 * @property integer $anonymous
 * @property integer $facebook_pubstatus
 */
class Classifieds extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'classifieds';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, title, email, fullname, tel, mainbody_text, facebook_pubstatus', 'required'),
			array('id, isactive, category, anonymous, facebook_pubstatus', 'numerical', 'integerOnly'=>true),
			array('title, email, fullname', 'length', 'max'=>255),
			array('tel', 'length', 'max'=>25),
			array('code', 'length', 'max'=>50),
			array('created_at, ending_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, created_at, ending_at, email, fullname, tel, code, isactive, mainbody_text, category, anonymous, facebook_pubstatus', 'safe', 'on'=>'search'),
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
			'title' => 'Title',
			'created_at' => 'Created At',
			'ending_at' => 'Ending At',
			'email' => 'Email',
			'fullname' => 'Fullname',
			'tel' => 'Tel',
			'code' => 'Code',
			'isactive' => 'Isactive',
			'mainbody_text' => 'Mainbody Text',
			'category' => 'Category',
			'anonymous' => 'Anonymous',
			'facebook_pubstatus' => 'Facebook Pubstatus',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('ending_at',$this->ending_at,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fullname',$this->fullname,true);
		$criteria->compare('tel',$this->tel,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('isactive',$this->isactive);
		$criteria->compare('mainbody_text',$this->mainbody_text,true);
		$criteria->compare('category',$this->category);
		$criteria->compare('anonymous',$this->anonymous);
		$criteria->compare('facebook_pubstatus',$this->facebook_pubstatus);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Classifieds the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
