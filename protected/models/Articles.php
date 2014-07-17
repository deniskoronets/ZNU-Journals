<?php

/**
 * This is the model class for table "articles".
 *
 * The followings are the available columns in table 'articles':
 * @property integer $article_id
 * @property integer $journal_id
 * @property integer $user_id
 * @property integer $rubric_id
 * @property integer $issue_id
 * @property string $name
 * @property string $file_path
 * @property string $annotation
 * @property string $authors
 */
class Articles extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Articles the static model class
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
		return 'articles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('journal_id, user_id, rubric_id, issue_id, name, file_path, annotation, authors', 'required'),
			array('journal_id, user_id, rubric_id, issue_id', 'numerical', 'integerOnly'=>true),
			array('name, file_path', 'length', 'max'=>1000),
			array('authors', 'length', 'max'=>5000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('article_id, journal_id, user_id, rubric_id, issue_id, name, file_path, annotation, authors', 'safe', 'on'=>'search'),
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
            'issue' => array(self::BELONGS_TO, 'Issues', 'issue_id'),
            'journal' => array(self::BELONGS_TO, 'Journals', 'article_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'article_id' => 'Article',
			'journal_id' => 'Journal',
			'user_id' => 'User',
			'rubric_id' => 'Rubric',
			'issue_id' => 'Issue',
			'name' => 'Name',
			'file_path' => 'File Path',
			'annotation' => 'Annotation',
			'authors' => 'Authors',
		);
	}

    /**
      * Получить путь к файлу статьи для html
      * @return string
      */
    public function getFilePathForHtml()
    {
        return Yii::app()->params['articlesPath'] . 'journal_' . $this->journal->journal_id . '/'
             . 'issue_' . $this->issue->issue_id . '/' . $this->file_path;
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

		$criteria->compare('article_id',$this->article_id);
		$criteria->compare('journal_id',$this->journal_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('rubric_id',$this->rubric_id);
		$criteria->compare('issue_id',$this->issue_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('file_path',$this->file_path,true);
		$criteria->compare('annotation',$this->annotation,true);
		$criteria->compare('authors',$this->authors,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}