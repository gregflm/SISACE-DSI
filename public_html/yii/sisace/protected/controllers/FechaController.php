<?php
#http://146.83.198.35/~grupo2/yii/gregory/hola/index
class FechaController extends Controller

{

	public function actionIndex(){
		$model= CActiveRecord::model("allDates")->findAll();
		$twitter="@greg_twt";
		$this->render("index",array("model"=>$model,"twitter"=>$twitter));


	}
}