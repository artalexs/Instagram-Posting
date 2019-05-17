<?php

 namespace app\models;

use Yii;
use yii\base\Model;

 class SignupForm extends Model
 {
    public $username;
    // public $email;
    public $password;

    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 255],
            [['username'], 'unique', 'targetAttribute'=>'username', 'targetClass'=> 'app\models\User'],
        ];
    }

    public function signup()
    {
        if($this->validate())
        {
            $user = new User();
            $user->attributes = $this->attributes;
            return $user->create();
        }
    }
 }