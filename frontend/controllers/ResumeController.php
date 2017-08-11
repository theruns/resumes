<?php 

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\resume;
class ResumeController extends Controller
{
	public $layout = "layout";
	public function actionResume_list()
	{
		$model = new Resume();
		//查询数据
		$data = Yii::$app->db->createCommand("select * from resume where r_id = 1")->queryOne();
		$resumename = Yii::$app->request->get("Rname");
		//修改
		$sql = "update resume set rname='{$resumename}' where r_id = 1";
	    Yii::$app->db->createCommand($sql)->execute();
		return $this->render("resume_list",['model'=>$model,'data'=>$data]);
	}
	public function actionMyresume()
	{
		return $this->render("myresume");
	}
}

 ?>