<?php

/**
 * This is the model class for table "publications".
 *
 * The followings are the available columns in table 'publications':
 * @property integer $id
 * @property integer $product_id
 * @property integer $publication_series_id
 * @property string $serial
 * @property integer $pages
 * @property string $vol
 * @property string $year
 * @property string $dimensions
 * @property string $image
 * @property string $abstract
 * @property string $content
 * @property integer $topSellers
 * @property integer $inprint
 * @property string $publicdate
 */
class Publications extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'publications';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id', 'required'),
			array('product_id, publication_series_id, pages, topSellers, inprint', 'numerical', 'integerOnly'=>true),
			array('serial', 'length', 'max'=>20),
			array('vol', 'length', 'max'=>6),
			array('year', 'length', 'max'=>4),
			array('dimensions', 'length', 'max'=>10),
			array('image, abstract', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, publication_series_id, serial, pages, vol, year, dimensions, image, abstract, content, topSellers, inprint, publicdate', 'safe', 'on'=>'search'),
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
                    'products' => array(self::BELONGS_TO, 'Products', 'product_id'),
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
			'publication_series_id' => 'Publication Series',
			'serial' => 'Serial',
			'pages' => 'Pages',
			'vol' => 'Vol',
			'year' => 'Year',
			'dimensions' => 'Dimensions',
			'image' => 'Image',
			'abstract' => 'Abstract',
			'content' => 'Content',
			'topSellers' => 'Top Sellers',
			'inprint' => 'Inprint',
			'publicdate' => 'Publicdate',
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
		$criteria->compare('publication_series_id',$this->publication_series_id);
		$criteria->compare('serial',$this->serial,true);
		$criteria->compare('pages',$this->pages);
		$criteria->compare('vol',$this->vol,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('dimensions',$this->dimensions,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('abstract',$this->abstract,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('topSellers',$this->topSellers);
		$criteria->compare('inprint',$this->inprint);
		$criteria->compare('publicdate',$this->publicdate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Publications the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
