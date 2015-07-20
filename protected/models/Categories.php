<?php

/**
 * This is the model class for table "categories".
 *
 * The followings are the available columns in table 'categories':
 * @property integer $id
 * @property integer $parent_id
 * @property integer $site_id
 * @property integer $productype_id
 * @property string $title
 * @property string $title_en
 * @property string $titleSEO
 * @property integer $ordering
 * @property integer $active
 */
class Categories extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'categories';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('site_id, productype_id, title, title_en, titleSEO, ordering', 'required'),
			array('id, site_id, productype_id, ordering, active', 'numerical', 'integerOnly'=>true),
			array('title, title_en, titleSEO', 'length', 'max'=>60),
                        array('parent_id', 'default', 'setOnEmpty' => true, 'value' => null),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, site_id, productype_id, title, title_en, titleSEO, ordering, active', 'safe', 'on'=>'search'),
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
                    'Childs' => array(self::HAS_MANY, 'Categories', 'parent_id'),
                    'Parent' => array(self::BELONGS_TO, 'Categories', 'parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
                        'parent_id' => 'Parent Category',
			'site_id' => 'Site',
			'productype_id' => 'Productype',
			'title' => 'Title',
			'title_en' => 'Title En',
			'titleSEO' => 'Title Seo',
			'ordering' => 'Ordering',
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
                $criteria->compare('parent_id',$this->parent_id);
		$criteria->compare('site_id',$this->site_id);
		$criteria->compare('productype_id',$this->productype_id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('title_en',$this->title_en,true);
		$criteria->compare('titleSEO',$this->titleSEO,true);
		$criteria->compare('ordering',$this->ordering);
		$criteria->compare('active',$this->active);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Categories the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function getParentOptions()
        {
            $criteria = new CDbCriteria();
            $criteria->condition = 'parent_id IS NULL';
            $model = Categories::model()->findAll($criteria);
            
            $list = CHtml::listData($model, 'id', 'title');
                
            return $list;
        }
               
        function getTitleWithParent()
        {
            return ( $this->Parent !== null ? $this->Parent->title.' - ' : '' ).$this->title;
        }
}
