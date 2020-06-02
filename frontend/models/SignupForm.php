<?php
namespace app\models;
use yii\base\Model;

class SignupForm extends Model{
 
 public $username;
 public $password;
 
    public function rules() {
        return [
            
        ];
    }
 
 public function attributeLabels() {
 return [
 			'name' => 'Ваше имя',
            'email' => 'Адрес электронной почты',
            'subject' => 'Телефон',
            'massage' => 'Телефон',
 ];
 }


 
}