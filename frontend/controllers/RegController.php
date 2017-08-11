<?php
namespace frontend\controllers;

use Yii;
use yii\helpers\Html;
use yii\web\Controller;
use frontend\models\User;
use frontend\models\Sign;
use common\models\LoginForm;
/**
* 
*/
class RegController extends Controller
{

	//登录
	public function actionLogin(){
		//判断是登录还是验证登录
    	if(Yii::$app->request->isPost){
    		//接收数据Html::encode
    		$data=Yii::$app->request->post();
    		$userData=User::find()->where(array('username'=>Html::encode($data['username']),'password'=>md5(Html::encode($data['password']))))->asArray()->one();
    		$model = new LoginForm();
        	$model->load(Yii::$app->request->post());
        	$model->login();

    		if($userData){
                $bloon=User::updateAll(array('last_time'=>date('Y-m-d H:i:s')),"id=:userid",array(':userid'=>$userData['id']));
                Yii::$app->session['user_id']=$userData['id'];
                Yii::$app->session['username']=$userData['username'];
 
    			echo "<script>alert('登录成功！');location.href='?r=welcome/show'</script>";
    		}else{
    			echo "<script>alert('账号或密码错误，请重新登录！');location.href='?r=reg/login'</script>";
    		}
    	}else{
    		$model=new User();
        	return $this->renderPartial('login',array('model'=>$model));
    	}
		
	}
	public function actionLogout(){
		Yii::$app->user->logout();
		$this->redirect('?r=reg/login');
       
	}

	//注册
	public function actionSign(){
        $model = new User();
        $request = Yii::$app->request;
        if($request->isPost)
        {
            if($model->load($request->post()) && $model->validate())
            {
                var_dump($model);
                $model->save();
            }
        }
		return $this->renderPartial('sign',['model'=>$model]);
	}
}


?>

