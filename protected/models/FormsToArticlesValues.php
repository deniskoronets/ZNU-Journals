<?php

/**
 * This is the model class for table "forms_to_articles_values".
 *
 * The followings are the available columns in table 'forms_to_articles_values':
 * @property integer $ftav_id
 * @property integer $fta_id
 * @property integer $journal_id
 * @property integer $user_id
 * @property string $post_date
 * @property string $values
 */
class FormsToArticlesValues extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FormsToArticlesValues the static model class
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
		return 'forms_to_articles_values';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fta_id, journal_id, user_id, post_date, values', 'required'),
			array('fta_id, journal_id, user_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ftav_id, fta_id, journal_id, user_id, post_date, values', 'safe', 'on'=>'search'),
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
			'ftav_id' => 'Ftav',
			'fta_id' => 'Fta',
			'journal_id' => 'Journal',
			'user_id' => 'User',
			'post_date' => 'Post Date',
			'values' => 'Values',
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

		$criteria->compare('ftav_id',$this->ftav_id);
		$criteria->compare('fta_id',$this->fta_id);
		$criteria->compare('journal_id',$this->journal_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('post_date',$this->post_date,true);
		$criteria->compare('values',$this->values,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}