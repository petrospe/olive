<?php

/**
 * This is the model class for table "articles".
 *
 * The followings are the available columns in table 'articles':
 * @property integer $id
 * @property integer $site_id
 * @property string $title
 * @property string $title_en
 * @property string $subtitle
 * @property string $subtitle_en
 * @property string $description
 * @property string $description_en
 * @property string $publicdate
 * @property integer $active
 */
class Articles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'articles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, title, subtitle, description, publicdate', 'required'),
			array('id, site_id, active', 'numerical', 'integerOnly'=>true),
			array('title, title_en', 'length', 'max'=>255),
			array('subtitle, subtitle_en', 'length', 'max'=>80),
                        array('description_en', 'default', 'setOnEmpty' => true, 'value' => NULL),
                        array('publicdate', 'type', 'type' => 'date', 'dateFormat' => 'yyyy-MM-dd'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, site_id, title, title_en, subtitle, subtitle_en, description, description_en, publicdate, active', 'safe', 'on'=>'search'),
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
			'site_id' => 'Site',
			'title' => 'Title',
			'title_en' => 'Title En',
			'subtitle' => 'Subtitle',
			'subtitle_en' => 'Subtitle En',
			'description' => 'Description',
			'description_en' => 'Description En',
			'publicdate' => 'Publicdate',
			'active' => 'Active',
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
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('subtitle',$this->subtitle);
		$criteria->compare('subtitle_en',$this->subtitle_en);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('description_en',$this->description_en,true);
		$criteria->compare('publicdate',$this->publicdate,true);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Articles the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
