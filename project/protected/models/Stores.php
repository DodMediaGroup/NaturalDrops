<?php

/**
 * This is the model class for table "stores".
 *
 * The followings are the available columns in table 'stores':
 * @property integer $id_store
 * @property string $name
 * @property string $address
 * @property string $locality
 * @property string $phone
 * @property string $attention
 * @property string $email
 * @property string $website
 * @property integer $city
 * @property double $lat
 * @property double $lng
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Cities $city0
 */
class Stores extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'stores';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, city, lat, lng', 'required'),
			array('city, status', 'numerical', 'integerOnly'=>true),
			array('lat, lng', 'numerical'),
			array('name, address, locality, phone, attention, email, website', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_store, name, address, locality, phone, attention, email, website, city, lat, lng, status', 'safe', 'on'=>'search'),
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
			'city0' => array(self::BELONGS_TO, 'Cities', 'city'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_store' => 'Id Store',
			'name' => 'Name',
			'address' => 'Address',
			'locality' => 'Locality',
			'phone' => 'Phone',
			'attention' => 'Attention',
			'email' => 'Email',
			'website' => 'Website',
			'city' => 'City',
			'lat' => 'Lat',
			'lng' => 'Lng',
			'status' => 'Status',
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

		$criteria->compare('id_store',$this->id_store);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('locality',$this->locality,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('attention',$this->attention,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('city',$this->city);
		$criteria->compare('lat',$this->lat);
		$criteria->compare('lng',$this->lng);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Stores the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
