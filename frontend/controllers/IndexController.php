<?php 
namespace frontend\controllers;

use Yii;
use yii\web\controller;


class IndexController extends Controller
{
	public $layout = 'layout';
	public function actionIndex()
	{
		return $this->render('index');
	}
	public function actionShow()
	{
		return $this->render('show');
	}
}

 ?>