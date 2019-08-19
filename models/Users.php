<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "kequip_users".
 *
 * @property int $id_kequip_users
 * @property string $kequip_users_firstname
 * @property string $kequip_users_lastname
 * @property string $kequip_users_email
 * @property string $kequip_users_password
 * @property int $kequip_users_usertype
 */
class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kequip_users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kequip_users_firstname', 'kequip_users_lastname', 'kequip_users_email', 'kequip_users_password', 'kequip_users_usertype'], 'required'],
            [['kequip_users_usertype'], 'integer'],
            [['kequip_users_firstname', 'kequip_users_lastname', 'kequip_users_email', 'kequip_users_password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kequip_users' => 'Id Kequip Users',
            'kequip_users_firstname' => 'Kequip Users Firstname',
            'kequip_users_lastname' => 'Kequip Users Lastname',
            'kequip_users_email' => 'Kequip Users Email',
            'kequip_users_password' => 'Kequip Users Password',
            'kequip_users_usertype' => 'Kequip Users Usertype',
        ];
    }

    public function getAuthKey() {
        
    }

    public function getId() {
         return $this->getPrimaryKey();
    }

    public function validateAuthKey($authKey) {
        
    }

    public static function findIdentity($id) {
         return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        return static::findOne(['access_token' => $token]);
    }

    public static function findByemail($email)
    {
        return static::findOne(['kequip_users_email' => $email]);
    }

    public function validatePassword($password)
    {
        return $this->kequip_users_password === $password;
    }

}
