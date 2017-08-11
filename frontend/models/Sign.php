<?php 
namespace frontend\models;
use Yii;
use yii\base\Model;


class Sign extends Model
{
	public $username;
	public $password;
	function rules()
	{
		return [
		[['username','password'],'required']
		];
	}
}

 ?>