<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    public static function findIdentity($id)
    {
        return User::findOne($id);
    }
    

    public static function findIdentityByAccessToken($token, $type = null)
    {}
    

    public function getId()
    {
        return $this->id;
    }
    

    public function getAuthKey(){}
    

    public function validateAuthKey($authKey){}

    public static function findByUsername($username)
    {
        return User::find()->where(['username'=>$username])->one();
    }

    public function validatePassword($password)
    {
        return ($this->password == $password) ? true : false;

    }


    public function create()
    {
        $user = new User();
        $user->attributes = $this->attributes;
        return $user->save(false);
    }
}
