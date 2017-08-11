<?php 
namespace frontend\controllers;

use Yii;
use yii\web\controller;
use frontend\models\position;

class PositionController extends Controller
{
	public $layout = "layout";
	public function actionCreate()
	{
		//new
		$model = new Position();
		$request = Yii::$app->request;
		if($model->isPost)
		{
			if($model->load($request->post()) && $model->validate())
			{
				$model->save();
			}
		}
		return $this->render("create",['model'=>$model]);
	}
}

 ?>