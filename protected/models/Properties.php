<?php

/**
 * This is the model class for table "properties".
 *
 * The followings are the available columns in table 'properties':
 * @property integer $id
 * @property integer $user_id
 * @property integer $property_type_id
 * @property integer $property_status_id
 * @property string $address
 * @property string $address_more
 * @property string $postcode
 * @property string $city
 * @property integer $state_id
 * @property integer $is_active
 * @property string $created_by
 * @property string $created
 * @property string $modified_by
 * @property string $modified
 * @property integer $gallery_id
 *
 * The followings are the available model relations:
 * @property Bills[] $bills
 * @property Gallery $gallery
 * @property PropertyStatuses $propertyStatus
 * @property PropertyTypes $propertyType
 * @property States $state
 * @property Users $user
 * @property PropertyTenants[] $propertyTenants
 */
class Properties extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'properties';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, property_type_id, property_status_id, address, postcode, city, state_id', 'required'),
			array('user_id, property_type_id, property_status_id, state_id, is_active, gallery_id', 'numerical', 'integerOnly'=>true),
			array('address, address_more', 'length', 'max'=>200),
			array('postcode', 'length', 'max'=>10),
			array('city', 'length', 'max'=>100),
			array('created_by, modified_by', 'length', 'max'=>20),
			array('created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, user_id, property_type_id, property_status_id, address, address_more, postcode, city, state_id, is_active, created_by, created, modified_by, modified, gallery_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 * tested
	 */
	public function relations() 
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'bills' => array(self::HAS_MANY, 'Bills', 'property_id'),
			'gallery' => array(self::BELONGS_TO, 'Gallery', 'gallery_id'),
			'propertyStatus' => array(self::BELONGS_TO, 'PropertyStatuses', 'property_status_id'),
			'propertyType' => array(self::BELONGS_TO, 'PropertyTypes', 'property_type_id'),
			'state' => array(self::BELONGS_TO, 'States', 'state_id'),
			'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
			'propertyTenants' => array(self::HAS_MANY, 'PropertyTenants', 'property_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'user_id' => 'User',
			'property_type_id' => 'Property Type',
			'property_status_id' => 'Property Status',
			'address' => 'Address',
			'address_more' => 'Address More',
			'postcode' => 'Postcode',
			'city' => 'City',
			'state_id' => 'State',
			'is_active' => 'Is Active',
			'created_by' => 'Created By',
			'created' => 'Created',
			'modified_by' => 'Modified By',
			'modified' => 'Modified',
			'gallery_id' => 'Gallery',
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
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('property_type_id',$this->property_type_id);
		$criteria->compare('property_status_id',$this->property_status_id);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('address_more',$this->address_more,true);
		$criteria->compare('postcode',$this->postcode,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state_id',$this->state_id);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified_by',$this->modified_by,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('gallery_id',$this->gallery_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Properties the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
