<?php

class UserIdentity extends CUserIdentity
{
	private $_id;

    public function authenticate()
    {
        $record = Users::model()->findByAttributes(array('login' => $this->username));

        if ($record===null) {

            $this->errorCode = self::ERROR_USERNAME_INVALID;

        } elseif ($record->password !== $this->password) { // crypt($this->password, $record->password)) {

            $this->errorCode = self::ERROR_PASSWORD_INVALID;

        } else {
            $this->_id = $record->user_id;
            $this->setState('info', $record);
            $this->errorCode = self::ERROR_NONE;
        }
        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->_id;
    }
}