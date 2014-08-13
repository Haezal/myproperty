<?php

/**
 * This is the model class for table "pay_bills".
 *
 * The followings are the available columns in table 'pay_bills':
 * @property integer $id
 * @property integer $bill_id
 * @property integer $month_id
 * @property integer $year
 * @property string $bill_date
 * @property string $from_date
 * @property string $end_date
 * @property string $amount_due
 * @property integer $is_pay
 * @property integer $pay_list_id
 * @property string $payment_date
 * @property integer $is_active
 * @property string $created
 * @property string $modified
 * @property string $created_by
 * @property string $modified_by
 *
 * The followings are the available model relations:
 * @property Bills $bill
 * @property Months $month
 * @property PayLists $payList
 */
class PayBills extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pay_bills';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bill_id, month_id, year, is_pay, pay_list_id, is_active', 'numerical', 'integerOnly'=>true),
			array('amount_due', 'length', 'max'=>11),
			array('created_by, modified_by', 'length', 'max'=>20),
			array('bill_date, from_date, end_date, payment_date, created, modified', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, bill_id, month_id, year, bill_date, from_date, end_date, amount_due, is_pay, pay_list_id, payment_date, is_active, created, modified, created_by, modified_by', 'safe', 'on'=>'search'),
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
			'bill' => array(self::BELONGS_TO, 'Bills', 'bill_id'),
			'month' => array(self::BELONGS_TO, 'Months', 'month_id'),
			'payList' => array(self::BELONGS_TO, 'PayLists', 'pay_list_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'bill_id' => 'Bill',
			'month_id' => 'Month',
			'year' => 'Year',
			'bill_date' => 'Bill Date',
			'from_date' => 'From Date',
			'end_date' => 'End Date',
			'amount_due' => 'Amount Due',
			'is_pay' => 'Is Pay',
			'pay_list_id' => 'Pay List',
			'payment_date' => 'Payment Date',
			'is_active' => 'Is Active',
			'created' => 'Created',
			'modified' => 'Modified',
			'created_by' => 'Created By',
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
		$criteria->compare('bill_id',$this->bill_id);
		$criteria->compare('month_id',$this->month_id);
		$criteria->compare('year',$this->year);
		$criteria->compare('bill_date',$this->bill_date,true);
		$criteria->compare('from_date',$this->from_date,true);
		$criteria->compare('end_date',$this->end_date,true);
		$criteria->compare('amount_due',$this->amount_due,true);
		$criteria->compare('is_pay',$this->is_pay);
		$criteria->compare('pay_list_id',$this->pay_list_id);
		$criteria->compare('payment_date',$this->payment_date,true);
		$criteria->compare('is_active',$this->is_active);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('modified',$this->modified,true);
		$criteria->compare('created_by',$this->created_by,true);
		$criteria->compare('modified_by',$this->modified_by,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PayBills the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
