<?php

/**
 * This is the model class for table "product_associates".
 *
 * The followings are the available columns in table 'product_associates':
 * @property integer $id
 * @property integer $product_id
 * @property integer $associate_id
 * @property integer $attribute_id
 * @property integer $ordering
 */

/**
 * CompositeUniqueKeyValidator class file.
 */
class CompositeUniqueKeyValidatorProdAss extends CValidator {
    /**
     * @var string comma separated columns that are unique key
     */
    public $keyColumns;

    public $errorMessage = '"{columns_labels}" already exists';

    /**
     * @var boolean whether the error message should be added to all of the columns
     */
    public $addErrorToAllColumns = false;

    /**
     * @param CModel $object the object being validated
     * @param string $attribute if there is an validation error then error message
     * will be added to this property
     */
    protected function validateAttribute($object, $attribute) {
        $class = get_class($object);
        Yii::import($class);

        $keyColumns = explode(',', $this->keyColumns);
        if (count($keyColumns) == 1) {
            throw new CException('CUniqueValidator should be used instead');
        }
        $columnsLabels = $object->attributeLabels();

        $criteria = new CDbCriteria();
        $keyColumnsLabels = array();
        foreach ($keyColumns as &$column) {
            $column = trim($column);
            $criteria->compare($column, $object->$column);
            $keyColumnsLabels[] = $columnsLabels[$column];
        }
        unset($column);
        $criteria->limit = 1;

        if ($class::model()->count($criteria)) {
            $message = Yii::t('yii', $this->errorMessage, array(
                '{columns_labels}' => join(', ', $keyColumnsLabels)
            ));
            if ($this->addErrorToAllColumns) {
                foreach ($keyColumns as $column) {
                    $this->addError($object, $column, $message);
                }
            }
            else {
                $this->addError($object, $attribute, $message);
            }
        }
    }

}

class ProductAssociates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_associates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, associate_id, attribute_id, ordering', 'required'),
			array('product_id, associate_id, attribute_id, ordering', 'numerical', 'integerOnly'=>true),
                        array('product_id', 'CompositeUniqueKeyValidatorProdAss', 'keyColumns' => 'attribute_id, associate_id, product_id'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, associate_id, attribute_id, ordering', 'safe', 'on'=>'search'),
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
			'associate_id' => 'Associate',
			'attribute_id' => 'Attribute',
			'ordering' => 'Ordering',
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
		$criteria->compare('associate_id',$this->associate_id);
		$criteria->compare('attribute_id',$this->attribute_id);
		$criteria->compare('ordering',$this->ordering);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductAssociates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
