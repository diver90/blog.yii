<?php

namespace app\models;


use yii\base\Model;

class SignupForm extends Model
{
    public $email;
    public $username;
    public $password;
    public $compare;

    public function rules() {
        return [
            [['email', 'username', 'password', 'compare'], 'required', 'message' => 'Заполните поле'],
            ['email', 'email'],
            ['password', 'compare']
        ];
    }

    public function attributeLabels() {
        return [
            'email' => 'Ваш e-mail',
            'username' => 'Логин',
            'password' => 'Пароль',
            'compare' => 'Повторите пароль'
        ];
    }
}