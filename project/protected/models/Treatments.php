<?php

/**
 * This is the model class for table "treatments".
 *
 * The followings are the available columns in table 'treatments':
 * @property integer $id_treatment
 * @property string $treatment
 * @property string $description
 * @property string $benefits
 * @property string $use
 * @property string $image
 * @property integer $status
 */
class Treatments extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'treatments';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('treatment, description, benefits, use, image', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('treatment, use, image', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_treatment, treatment, description, benefits, use, image, status', 'safe', 'on'=>'search'),
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
			'id_treatment' => 'Id Treatment',
			'treatment' => 'Treatment',
			'description' => 'Description',
			'benefits' => 'Benefits',
			'use' => 'Use',
			'image' => 'Image',
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

		$criteria->compare('id_treatment',$this->id_treatment);
		$criteria->compare('treatment',$this->treatment,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('benefits',$this->benefits,true);
		$criteria->compare('use',$this->use,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Treatments the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
