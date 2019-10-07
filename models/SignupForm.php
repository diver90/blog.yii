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
            [['email', 'username', 'password', 'compare'], 'required', 'message' => 'Required'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This email address has already been taken.'],
            ['email', 'string', 'max' => 255],
            ['username', 'string', 'min' => 3, 'max' => 12],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'This username has already been taken.'],
            ['password', 'compare', 'compareAttribute' => 'compare'],
            ['password', 'string', 'min' => 8]
        ];
    }

    public function attributeLabels() {
        return [
            'email' => 'E-mail',
            'username' => 'Login',
            'password' => 'Password',
            'compare' => 'Re-type password'
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {

        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        return $user->save() ? $user : null;
    }

}