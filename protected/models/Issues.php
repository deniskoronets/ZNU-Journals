<?php

/**
 * This is the model class for table "issues".
 *
 * The followings are the available columns in table 'issues':
 * @property integer $issue_id
 * @property integer $journal_id
 * @property string $name
 * @property string $volume
 * @property string $series
 * @property string $year
 * @property string $publisher
 * @property integer $status
 * @property string $image
 * @property integer $access_mode
 */
class Issues extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Issues the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'issues';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('journal_id, name, volume, series, year, publisher, status, image, access_mode', 'required'),
			array('journal_id, status, access_mode', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>1000),
			array('volume', 'length', 'max'=>10),
			array('series, year, publisher', 'length', 'max'=>100),
			array('image', 'length', 'max'=>300),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('issue_id, journal_id, name, volume, series, year, publisher, status, image, access_mode', 'safe', 'on'=>'search'),
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
			'issue_id' => 'Issue',
			'journal_id' => 'Journal',
			'name' => 'Name',
			'volume' => 'Volume',
			'series' => 'Series',
			'year' => 'Year',
			'publisher' => 'Publisher',
			'status' => 'Status',
			'image' => 'Image',
			'access_mode' => 'Access Mode',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('issue_id',$this->issue_id);
		$criteria->compare('journal_id',$this->journal_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('volume',$this->volume,true);
		$criteria->compare('series',$this->series,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('publisher',$this->publisher,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('access_mode',$this->access_mode);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}