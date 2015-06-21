<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $id
 * @property integer $atlantis_id
 * @property integer $productype_id
 * @property integer $parent_id
 * @property string $title
 * @property string $title_en
 * @property string $titleSEO
 * @property string $subtitle
 * @property string $subtitle_en
 * @property string $description
 * @property string $description_en
 * @property integer $active
 * @property string $created
 * @property string $updated
 */
class Products extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('productype_id, title, titleSEO, description', 'required'),
			array('id, atlantis_id, productype_id, parent_id, active', 'numerical', 'integerOnly'=>true),
			array('title, title_en, titleSEO', 'length', 'max'=>255),
                        array('subtitle, subtitle_en, description_en', 'default', 'setOnEmpty' => true, 'value' => NULL),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, atlantis_id, productype_id, parent_id, title, title_en, titleSEO, subtitle, subtitle_en, description, description_en, active, created, updated', 'safe', 'on'=>'search'),
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
                    'productypes' => array(self::BELONGS_TO, 'Productypes', 'productype_id'),
                    'publications' => array(self::HAS_MANY, 'Publications', 'product_id'),
                    'seminars' => array(self::HAS_MANY, 'Seminars', 'product_id'),
                    'prices' => array(self::HAS_MANY, 'Prices', 'product_id'),
                    'productsites' => array(self::HAS_MANY, 'ProductSites', 'product_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'atlantis_id' => 'Atlantis',
			'productype_id' => 'Productype',
			'parent_id' => 'Parent',
			'title' => 'Title',
			'title_en' => 'Title En',
			'titleSEO' => 'Title Seo',
			'subtitle' => 'Subtitle',
			'subtitle_en' => 'Subtitle En',
			'description' => 'Description',
			'description_en' => 'Description En',
			'active' => 'Active',
			'created' => 'Created',
			'updated' => 'Updated',
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
		$criteria->compare('atlantis_id',$this->atlantis_id);
		$criteria->compare('productype_id',$this->productype_id);
		$criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('titleSEO',$this->titleSEO);
		$criteria->compare('subtitle',$this->subtitle);
		$criteria->compare('subtitle_en',$this->subtitle_en);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('description_en',$this->description_en,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                        'defaultOrder'=>'id DESC',
                         ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getTypeOptions()
        {
            return CHtml::listData(Products::model() ->findAll(), 'id', 'title');
        }
        
        /* Update Modified, Created dates */
	public function beforeSave() 
        {
	    if ($this->isNewRecord)
	        $this->created = new CDbExpression('NOW()');
	    else
	        $this->updated = new CDbExpression('NOW()');
	 
	    return parent::beforeSave();
	}
}
