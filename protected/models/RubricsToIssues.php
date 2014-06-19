<?php

/**
 * This is the model class for table "rubrics_to_issues".
 *
 * The followings are the available columns in table 'rubrics_to_issues':
 * @property integer $rti_id
 * @property integer $journal_id
 * @property integer $issue_id
 * @property string $name
 */
class RubricsToIssues extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RubricsToIssues the static model class
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
		return 'rubrics_to_issues';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('journal_id, issue_id, name', 'required'),
			array('journal_id, issue_id', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>1000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('rti_id, journal_id, issue_id, name', 'safe', 'on'=>'search'),
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
			'rti_id' => 'Rti',
			'journal_id' => 'Journal',
			'issue_id' => 'Issue',
			'name' => 'Name',
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

		$criteria->compare('rti_id',$this->rti_id);
		$criteria->compare('journal_id',$this->journal_id);
		$criteria->compare('issue_id',$this->issue_id);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}