<?php

/**
 * This is the model class for table "blog_entries".
 *
 * The followings are the available columns in table 'blog_entries':
 * @property integer $id_entry
 * @property string $title
 * @property string $article
 * @property string $image
 * @property string $date
 * @property string $source
 * @property string $navigation
 * @property integer $language
 * @property integer $user
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Languages $language0
 * @property Users $user0
 */
class BlogEntries extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'blog_entries';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, article, date, navigation, user', 'required'),
			array('language, user, status', 'numerical', 'integerOnly'=>true),
			array('title, image, source, navigation', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_entry, title, article, image, date, source, navigation, language, user, status', 'safe', 'on'=>'search'),
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
			'language0' => array(self::BELONGS_TO, 'Languages', 'language'),
			'user0' => array(self::BELONGS_TO, 'Users', 'user'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_entry' => 'Id Entry',
			'title' => 'Title',
			'article' => 'Article',
			'image' => 'Image',
			'date' => 'Date',
			'source' => 'Source',
			'navigation' => 'Navigation',
			'language' => 'Language',
			'user' => 'User',
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

		$criteria->compare('id_entry',$this->id_entry);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('article',$this->article,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('navigation',$this->navigation,true);
		$criteria->compare('language',$this->language);
		$criteria->compare('user',$this->user);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BlogEntries the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
