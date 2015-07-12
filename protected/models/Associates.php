<?php

/**
 * This is the model class for table "associates".
 *
 * The followings are the available columns in table 'associates':
 * @property integer $id
 * @property string $first_name
 * @property string $first_name_en
 * @property string $last_name
 * @property string $last_name_en
 */

/**
 * CompositeUniqueKeyValidator class file.
 */
class CompositeUniqueKeyValidatorAssociates extends CValidator {
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

class Associates extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'associates';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('first_name, last_name', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('first_name, first_name_en', 'length', 'max'=>30),
			array('last_name, last_name_en, title', 'length', 'max'=>100),
                        array('last_name', 'CompositeUniqueKeyValidatorAssociates', 'keyColumns' => 'first_name, last_name'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, first_name, first_name_en, last_name, last_name_en, title', 'safe', 'on'=>'search'),
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
                    'users' => array(self::HAS_MANY, 'Users', 'associate_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'first_name' => 'First Name',
			'first_name_en' => 'First Name En',
			'last_name' => 'Last Name',
			'last_name_en' => 'Last Name En',
                        'title' => 'title',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('first_name_en',$this->first_name_en,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('last_name_en',$this->last_name_en,true);
                $criteria->compare('title',$this->last_name_en,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'sort'=>array(
                        'defaultOrder'=>'last_name ASC',
                         ),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Associates the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        function getFullName()
        {
            return $this->first_name.' '.$this->last_name;
        }
}
