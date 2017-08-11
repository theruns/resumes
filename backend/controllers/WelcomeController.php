<?php 
namespace backend\controllers;
use Yii;
use yii\web\Controller;
use yii\models\resume_user;
class WelcomeController extends Controller
{
	public $layout='layout';
	//加载登录页面
	public function actionLogin()
	{
		return $this->render('login');
	}
	//执行登录查询数据库判断等操作
	public function actionLogin_do()
	{
		echo 11;die;
		//接受用户登录的信息
		// $param = Yii::$app->request->post();
		// var_dump($param);
	}
	public function actionSign()
	{
		echo 11;
	}
}



 ?>