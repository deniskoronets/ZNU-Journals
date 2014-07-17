<?php

/**
 * @property integer $journal_id
 * @property string $name
 * @property string $status
 * @property string $theme
 * @property string $user_languages
 */
class Journals extends CActiveRecord
{
	public static function model($className = __CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'journals';
	}

	public function rules()
	{
		return array(
			array('name, status, theme, user_languages', 'required'),
			array('name', 'length', 'max' => 1000),
			array('status', 'length', 'max' => 100),
			array('theme, user_languages', 'length', 'max' => 50),

			array('journal_id, name, status, theme, user_languages', 'safe', 'on' => 'search'),
		);
	}

	public function relations()
	{
		return array(
            'issues' => array(self::MANY_MANY, 'Issues', 'issues(journal_id, issue_id)'),
            'static_pages' => array(self::HAS_MANY, 'StaticPages', 'journal_id'),
		);
	}

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
      * Проверка, зарегистрирован ли пользователь в данном журнале
      * @return boolean
      */
    public function isUserRegisteredIn($userId)
    {
        return FormsToArticlesValues::model()->exists(
            'user_id=:user_id and journal_id=:journal_id',
            array(':user_id' => (int)$userId, ':journal_id' => $this->journal_id)
        );
    }

	public function search()
	{
		$criteria = new CDbCriteria;

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