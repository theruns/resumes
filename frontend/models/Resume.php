<?php 
namespace frontend\models;

use Yii;
use yii\base\model;

class Resume extends Model
{
	public $resumename;
	public function rules()
	{
		return [
			['resumename','required']
		];
	}
}


 ?>