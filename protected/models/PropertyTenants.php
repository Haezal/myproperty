<?php

/**
 * This is the model class for table "property_tenants".
 *
 * The followings are the available columns in table 'property_tenants':
 * @property integer $id
 * @property integer $property_id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $address_more
 * @property string $postcode
 * @property string $city
 * @property integer $state_id
 * @property string $phone_no
 * @property string $more_phone_no
 * @property integer $tenancy_status_id
 * @property string $move_in_date
 * @property string $move_out_date
 * @property string $deposit
 * @property integer $is_active
 * @property string $created_by
 * @property string $created
 * @property string $modified_by
 * @property string $modified
 *
 * The followings are the available model relations:
 * @property MontlyInstallments[] $montlyInstallments
 * @property States $state
 * @property TenancyStatuses $tenancyStatus
 * @property Properties $property
 */
class PropertyTenants extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'property_tenants';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('property_id, state_id, tenancy_status_id, is_active', 'numerical', 'integerOnly'=>true),
			array('first_name, last_name, address, address_more', 'length', 'max'=>100),
			array('postcode', 'length', 'max'=>10),
			array('city', 'length', 'max'=>50),
			array('phone_no, more_phone_no, created_by, modified_by', 'length', 'max'=>20),
			array('deposit', 'length', 'max'=>11),
			array('move_in_date, move_out_date, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, property_id, first_name, last_name, address, address_more, postcode, city, state_id, phone_no, more_phone_no, tenancy_status_id, move_in_date, move_out_date, deposit, is_active, created_by, created, modified_by, modified', 'safe', 'on'=>'search'),
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
			'montlyInstallments' => array(self::HAS_MANY, 'MontlyInstallments', 'property_tenant_id'),
			'state' => array(self::BELONGS_TO, 'States', 'state_id'),
			'tenancyStatus' => array(self::BELONGS_TO, 'TenancyStatuses', 'tenancy_status_id'),
			'property' => array(self::BELONGS_TO, 'Properties', 'property_id'),
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
			'first_name' => 'First Name',
			'last_name' => 'Last Name',
			'address' => 'Address',
			'address_more' => 'Address More',
			'postcode' => 'Postcode',
			'city' => 'City',
			'state_id' => 'State',
			'phone_no' => 'Phone No',
			'more_phone_no' => 'More Phone No',
			'tenancy_status_id' => 'Tenancy Status',
			'move_in_date' => 'Move In Date',
			'move_out_date' => 'Move Out Date',
			'deposit' => 'Deposit',
			'is_active' => 'Is Active',
			'created_by' => 'Created By',
			'created' => 'Created',
			'modified_by' => 'Modified By',
			'modified' => 'Modified',
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
		$criteria->compare('first_name',$this->first_name,true);
		$criteria->compare('last_name',$this->last_name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address_more',$this->address_more,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('phone_no',$this->phone_no,true);
		$criteria->compare('more_phone_no',$this->more_phone_no,true);
		$criteria->compare('tenancy_status_id',$this->tenancy_status_id);
		$criteria->compare('move_in_date',$this->move_in_date,true);
		$criteria->compare('move_out_date',$this->move_out_date,true);
		$criteria->compare('deposit',$this->deposit,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('modified',$this->modified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PropertyTenants the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
