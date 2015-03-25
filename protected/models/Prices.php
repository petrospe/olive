<?php

/**
 * This is the model class for table "prices".
 *
 * The followings are the available columns in table 'prices':
 * @property integer $id
 * @property integer $product_id
 * @property double $individuals
 * @property double $companies
 * @property integer $initialind
 * @property integer $initialcom
 * @property double $NoDiscountInd
 * @property double $NoDiscountCom
 * @property double $lawyers
 * @property double $practicingLawyers
 * @property double $laywerCompanies
 * @property double $NoDiscountLCom
 * @property double $newLawyers
 * @property double $NoDiscountNLaw
 * @property double $students
 * @property double $accountants
 * @property double $practicingAccountants
 * @property string $discountExpiration
 * @property string $discountTitle
 * @property string $discountTitle_en
 * @property string $discountCode
 * @property string $discountCode_en
 * @property double $discountPercentage
 * @property integer $ShowFrontPage
 * @property string $discountLabel
 * @property string $discountLabel_en
 */
class Prices extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'prices';
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
			array('product_id, initialind, initialcom, ShowFrontPage', 'numerical', 'integerOnly'=>true),
			array('individuals, companies, NoDiscountInd, NoDiscountCom, lawyers, practicingLawyers, laywerCompanies, NoDiscountLCom, newLawyers, NoDiscountNLaw, students, accountants, practicingAccountants, discountPercentage', 'numerical'),
			array('discountTitle, discountTitle_en, discountCode, discountCode_en, discountLabel, discountLabel_en', 'length', 'max'=>255),
			array('discountExpiration', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, individuals, companies, initialind, initialcom, NoDiscountInd, NoDiscountCom, lawyers, practicingLawyers, laywerCompanies, NoDiscountLCom, newLawyers, NoDiscountNLaw, students, accountants, practicingAccountants, discountExpiration, discountTitle, discountTitle_en, discountCode, discountCode_en, discountPercentage, ShowFrontPage, discountLabel, discountLabel_en', 'safe', 'on'=>'search'),
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
			'individuals' => 'Individuals',
			'companies' => 'Companies',
			'initialind' => 'Initialind',
			'initialcom' => 'Initialcom',
			'NoDiscountInd' => 'No Discount Ind',
			'NoDiscountCom' => 'No Discount Com',
			'lawyers' => 'Lawyers',
			'practicingLawyers' => 'Practicing Lawyers',
			'laywerCompanies' => 'Laywer Companies',
			'NoDiscountLCom' => 'No Discount Lcom',
			'newLawyers' => 'New Lawyers',
			'NoDiscountNLaw' => 'No Discount Nlaw',
			'students' => 'Students',
			'accountants' => 'Accountants',
			'practicingAccountants' => 'Practicing Accountants',
			'discountExpiration' => 'Discount Expiration',
			'discountTitle' => 'Discount Title',
			'discountTitle_en' => 'Discount Title En',
			'discountCode' => 'Discount Code',
			'discountCode_en' => 'Discount Code En',
			'discountPercentage' => 'Discount Percentage',
			'ShowFrontPage' => 'Show Front Page',
			'discountLabel' => 'Discount Label',
			'discountLabel_en' => 'Discount Label En',
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
		$criteria->compare('individuals',$this->individuals);
		$criteria->compare('companies',$this->companies);
		$criteria->compare('initialind',$this->initialind);
		$criteria->compare('initialcom',$this->initialcom);
		$criteria->compare('NoDiscountInd',$this->NoDiscountInd);
		$criteria->compare('NoDiscountCom',$this->NoDiscountCom);
		$criteria->compare('lawyers',$this->lawyers);
		$criteria->compare('practicingLawyers',$this->practicingLawyers);
		$criteria->compare('laywerCompanies',$this->laywerCompanies);
		$criteria->compare('NoDiscountLCom',$this->NoDiscountLCom);
		$criteria->compare('newLawyers',$this->newLawyers);
		$criteria->compare('NoDiscountNLaw',$this->NoDiscountNLaw);
		$criteria->compare('students',$this->students);
		$criteria->compare('accountants',$this->accountants);
		$criteria->compare('practicingAccountants',$this->practicingAccountants);
		$criteria->compare('discountExpiration',$this->discountExpiration,true);
		$criteria->compare('discountTitle',$this->discountTitle,true);
		$criteria->compare('discountTitle_en',$this->discountTitle_en,true);
		$criteria->compare('discountCode',$this->discountCode,true);
		$criteria->compare('discountCode_en',$this->discountCode_en,true);
		$criteria->compare('discountPercentage',$this->discountPercentage);
		$criteria->compare('ShowFrontPage',$this->ShowFrontPage);
		$criteria->compare('discountLabel',$this->discountLabel,true);
		$criteria->compare('discountLabel_en',$this->discountLabel_en,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Prices the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
