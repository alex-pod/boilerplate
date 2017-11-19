<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use elisdn\hybrid\AuthRoleModelInterface;

class User extends ActiveRecord implements IdentityInterface, AuthRoleModelInterface
{
	const ROLE_MANAGER = 0;
	const ROLE_ADMIN = 10;

	public $password;
	public $new_password;

	/**
	 * @inheritdoc
	 */
	public static function tableName()
	{
		return 'bms_users';
	}

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];

	public function rules()
	{
		return [
			[['name', 'login'], 'required'],
			['login', 'unique'],
			[['password', 'password_hash', 'auth_key'], 'required', 'on' => 'register'],
			[['email'], 'email'],
			[['new_password'], 'required', 'on' => 'password'],
			[['company', 'phone', 'role', 'position'], 'safe'],
		];
	}

	public function attributeLabels()
	{
		return [
			'name' => 'ФИО',
			'login' => 'Логин',
			'email' => 'Адрес почты',
			'password' => 'Пароль',
			'phone' => 'Телефон',
			'company' => 'Компания',
			'position'=>'Должность',
			'new_password'=>'Новый пароль',
		];
	}


    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
	    return static::findOne(['id' => $id]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
//        return static::findOne(['access_token' => $token]);
          throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
	    return static::findOne(['login' => $username]);
    }

	/**
	 * Finds user by password reset token
	 *
	 * @param string $token password reset token
	 * @return static|null
	 */
	public static function findByPasswordResetToken($token)
	{
		if (!static::isPasswordResetTokenValid($token)) {
			return null;
		}

		return static::findOne([
			'password_reset_token' => $token,
		]);
	}

	/**
	 * Finds out if password reset token is valid
	 *
	 * @param string $token password reset token
	 * @return boolean
	 */
	public static function isPasswordResetTokenValid($token)
	{
		if (empty($token)) {
			return false;
		}
		$expire = Yii::$app->params['user.passwordResetTokenExpire'];
		$parts = explode('_', $token);
		$timestamp = (int)end($parts);
		return $timestamp + $expire >= time();
	}

    /**
     * @inheritdoc
     */
    public function getId()
    {
	    return $this->getPrimaryKey();
    }

	/**
	 * @inheritdoc
	 */
	public static function getUsers()
	{
		return self::$users;
	}

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
	    return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
	    return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
	    return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

	/**
	 * Generates password hash from password and sets it to the model
	 *
	 * @param string $password
	 */
	public function setPassword($password)
	{
		$this->password_hash = Yii::$app->security->generatePasswordHash($password);
	}

	/**
	 * Generates "remember me" authentication key
	 */
	public function generateAuthKey()
	{
		$this->auth_key = Yii::$app->security->generateRandomString();
	}

	/**
	 * Generates new password reset token
	 */
	public function generatePasswordResetToken()
	{
		$this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
	}

	/**
	 * Removes password reset token
	 */
	public function removePasswordResetToken()
	{
		$this->password_reset_token = null;
	}

	/**
	 *  Implementation of AuthRoleModel's methods
	 */
	public static function findAuthRoleIdentity($id)
	{
		return static::findOne($id);
	}

	public static function findAuthIdsByRoleName($roleName)
	{
		return static::find()->where(['role' => $roleName])->select('id')->column();
	}

	public function getAuthRoleNames()
	{
		return (array)$this->role;
	}

	public function addAuthRoleName($roleName)
	{
		$this->updateAttributes(['role' => $this->role = $roleName]);
	}

	public function removeAuthRoleName($roleName)
	{
		$this->updateAttributes(['role' => $this->role = null]);
	}

	public function clearAuthRoleNames()
	{
		$this->updateAttributes(['role' => $this->role = null]);
	}
}
