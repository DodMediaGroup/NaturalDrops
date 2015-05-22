<?php

/**
 * This is the model class for table "pages_site".
 *
 * The followings are the available columns in table 'pages_site':
 * @property integer $id_page
 * @property string $name
 * @property string $navigation
 * @property integer $language
 * @property integer $principal
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property MenuItems[] $menuItems
 * @property Languages $language0
 * @property PagesSite $principal0
 * @property PagesSite[] $pagesSites
 */
class PagesSite extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pages_site';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, navigation, language', 'required'),
			array('language, principal, status', 'numerical', 'integerOnly'=>true),
			array('name, navigation', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_page, name, navigation, language, principal, status', 'safe', 'on'=>'search'),
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
			'menuItems' => array(self::HAS_MANY, 'MenuItems', 'page'),
			'language0' => array(self::BELONGS_TO, 'Languages', 'language'),
			'principal0' => array(self::BELONGS_TO, 'PagesSite', 'principal'),
			'pagesSites' => array(self::HAS_MANY, 'PagesSite', 'principal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_page' => 'Id Page',
			'name' => 'Name',
			'navigation' => 'Navigation',
			'language' => 'Language',
			'principal' => 'Principal',
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

		$criteria->compare('id_page',$this->id_page);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('navigation',$this->navigation,true);
		$criteria->compare('language',$this->language);
		$criteria->compare('principal',$this->principal);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PagesSite the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
