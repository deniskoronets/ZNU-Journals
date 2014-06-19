<?php

/**
 * This is the model class for table "journals".
 *
 * The followings are the available columns in table 'journals':
 * @property integer $journal_id
 * @property string $name
 * @property string $status
 * @property string $theme
 * @property string $user_languages
 */
class Journals extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Journals the static model class
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
		return 'journals';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, status, theme, user_languages', 'required'),
			array('name', 'length', 'max'=>1000),
			array('status', 'length', 'max'=>100),
			array('theme, user_languages', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('journal_id, name, status, theme, user_languages', 'safe', 'on'=>'search'),
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
            'issues' => array(self::MANY_MANY, 'Issues', 'issues(issue_id, journal_id)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'journal_id' => 'Journal',
			'name' => 'Name',
			'status' => 'Status',
			'theme' => 'Theme',
			'user_languages' => 'User Languages',
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

		$criteria->compare('journal_id',$this->journal_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('theme',$this->theme,true);
		$criteria->compare('user_languages',$this->user_languages,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}