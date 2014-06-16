<?php

class BoletaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('@'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('@'),
			),
			array('allow', // Generar PDF
				'actions'=>array('generarPdf','mensualPdf','mes'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	public function actionMes()
	{
		$fecha_mes=new FechaForm;
		if(isset($_POST["FechaForm"]))
		{
			$fecha_mes->attributes=$_POST["FechaForm"];
			if($fecha_mes->validate())
			{
				$this->redirect(array("mensualPdf","fecha1"=>$fecha_mes->año,"fecha2"=>$fecha_mes->mes));
			}
		}

		$this->render('mes',array(
			'fecha_mes'=>$fecha_mes,
		));
	}


	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Boleta;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Boleta']))
		{
			$model->attributes=$_POST['Boleta'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->fecha_emision));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Boleta']))
		{
			$model->attributes=$_POST['Boleta'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->fecha_emision));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Boleta');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Boleta('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Boleta']))
			$model->attributes=$_GET['Boleta'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function actionGenerarPdf()
	{
	$fecha=date('Y-m-d');
	$criteria = new CDbCriteria;  
    $criteria->condition ="fecha_emision LIKE '$fecha %'";
	$model =Boleta::model()->findAll($criteria); //Consulta para buscar todos los registros
	$mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
	$mPDF1->useOnlyCoreFonts = true;
	$mPDF1->SetTitle("Reporte SISACE");
	$mPDF1->SetAuthor("sisace");
	$mPDF1->SetWatermarkText("DIA");
	$mPDF1->showWatermarkText = true;
	$mPDF1->watermark_font = 'DejaVuSansCondensed';
	$mPDF1->watermarkTextAlpha = 0.1;
	$mPDF1->SetDisplayMode('fullpage');
	if(empty($model)) {
	echo "<script languaje='javascript'>alert('Error , no hay datos para mostrar'); location.href='http://146.83.198.35/~grupo2/yii/sisace/index.php'</script>";
	} else {
	$mPDF1->WriteHTML($this->renderPartial('pdfReport', array('model'=>$model), true)); //hacemos un render partial a una vista preparada, en este caso es la vista pdfReport
	$mPDF1->Output('Reporte_'.date('YmdHis'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
	}
	exit;
	}
	
	public function actionMensualPdf($fecha1,$fecha2)
	{
	$fecha1=(string)$fecha1;
	$fecha2=(string)$fecha2;
	$criteria = new CDbCriteria;  
    $criteria->condition ="fecha_emision LIKE '$fecha1-$fecha2%'";
	$model =Boleta::model()->findAll($criteria); //Consulta para buscar todos los registros
	$mPDF1 = Yii::app()->ePdf->mpdf('utf-8','A4','','',15,15,35,25,9,9,'P'); //Esto lo pueden configurar como quieren, para eso deben de entrar en la web de MPDF para ver todo lo que permite.
	$mPDF1->useOnlyCoreFonts = true;
	$mPDF1->SetTitle("Reporte Mensual '$fecha2-$fecha1'");
	$mPDF1->SetAuthor("sisace");
	$mPDF1->SetWatermarkText("MES");
	$mPDF1->showWatermarkText = true;
	$mPDF1->watermark_font = 'DejaVuSansCondensed';
	$mPDF1->watermarkTextAlpha = 0.1;
	$mPDF1->SetDisplayMode('fullpage');
	if(empty($model)) {
		echo "<script languaje='javascript'>alert('No hay datos para mostrar'); location.href='http://146.83.198.35/~grupo2/yii/sisace/index.php?r=boleta/mes'</script>";
	} else {
	$mPDF1->WriteHTML($this->renderPartial('pdfReportMes', array('model'=>$model,'año'=>$fecha1,'mes'=>$fecha2), true)); //hacemos un render partial a una vista preparada, en este caso es la vista pdfReport
	$mPDF1->Output('Reporte_Mensual_'.date('Y-m-d_H:i:s'),'I');  //Nombre del pdf y parámetro para ver pdf o descargarlo directamente.
		}
	exit;
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Boleta the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Boleta::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Boleta $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='boleta-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
