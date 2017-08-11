<?php
namespace frontend\models;
use Yii;
use yii\db\ActiveRecord;
class User extends ActiveRecord{
	
	public $username;
	public $password;
	public static function tableName()
    {
        return 'user';
    }

	// public function attributeLabels()
	// {
	// 	return array(
	// 		'user_name'=>'请输入用户名：',
	// 		'user_pwd'=>'请输入密码：',
	// 		'user_phone'=>'请输入手机号：',
	// 	);
	// }
}
?>