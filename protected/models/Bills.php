<?php

/**
 * This is the model class for table "bills".
 *
 * The followings are the available columns in table 'bills':
 * @property integer $id
 * @property integer $property_id
 * @property integer $bill_type_id
 * @property string $account_no
 * @property string $old_account_no
 * @property string $collateral
 * @property integer $is_active
 * @property string $created
 * @property string $created_by
 * @property string $modified
 * @property string $modified_by
 *
 * The followings are the available model relations:
 * @property Properties $property
 * @property BillTypes $billType
 */
class Bills extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bills';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('property_id, bill_type_id, account_no', 'required'),
			array('property_id, bill_type_id, is_active', 'numerical', 'integerOnly'=>true),
			array('account_no, old_account_no', 'length', 'max'=>50),
			array('collateral', 'length', 'max'=>11),
			array('created_by, modified_by', 'length', 'max'=>20),
			array('created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, property_id, bill_type_id, account_no, old_account_no, collateral, is_active, created, created_by, modified, modified_by', 'safe', 'on'=>'search'),
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
			'property' => array(self::BELONGS_TO, 'Properties', 'property_id'),
			'billType' => array(self::BELONGS_TO, 'BillTypes', 'bill_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'property_id' => 'Property',
			'bill_type_id' => 'Bill Type',
			'account_no' => 'Account No',
			'old_account_no' => 'Old Account No',
			'collateral' => 'Collateral',
			'is_active' => 'Is Active',
			'created' => 'Created',
			'created_by' => 'Created By',
			'modified' => 'Modified',
			'modified_by' => 'Modified By',
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
		$criteria->compare('property_id',$this->property_id);
		$criteria->compare('bill_type_id',$this->bill_type_id);
		$criteria->compare('account_no',$this->account_no,true);
		$criteria->compare('old_account_no',$this->old_account_no,true);
		$criteria->compare('collateral',$this->collateral,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('modified_by',$this->modified_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Bills the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
