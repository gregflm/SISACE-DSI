<?php

/**
 * This is the model class for table "horario".
 *
 * The followings are the available columns in table 'horario':
 * @property integer $id_horario
 * @property string $rut_estacionamiento
 * @property string $hora_inicio
 * @property string $hora_termino
 * @property string $dia_desde
 * @property string $dia_hasta
 */
class Horario extends CActiveRecord
{

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'horario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('id_horario, rut_estacionamiento, hora_inicio, hora_termino, dia', 'required'),
			array('id_horario', 'numerical', 'integerOnly'=>true),
			array('rut_estacionamiento', 'length', 'max'=>15),
			array('dia_desde', 'length', 'max'=>40),
			array('dia_hasta', 'length', 'max'=>40),
			array('rut_estacionamiento','required','message' => 'Por favor, ingrese el rut del estacionamiento.'),
			array('hora_inicio','required','message' => 'Por favor, ingrese la hora de inicio.'),
			array('hora_termino','required','message' => 'Por favor, ingrese la hora de término.'),
			array('dia_desde','required','message' => 'Por favor, ingrese la vigencia del horario.'),
			array('dia_hasta','required','message' => 'Por favor, ingrese la vigencia del horario.'),
			
			array('hora_inicio','compare','compareAttribute'=>'hora_termino','operator'=>'<','message'=>'La hora de inicio debe ser menor a la hora de término'),
			array('dia_desde','unique', 'className' => 'Horario','message'=>'Ya existe un horario en ese dia, por favor ingréselo nuevamente o modifique el horario ya existente'),
			array('dia_hasta','unique', 'className' => 'Horario','message'=>'Ya existe un horario en ese dia, por favor ingréselo nuevamente o modifique el horario ya existente'),
			//array('dia_desde','compare','compareAttribute'=>'dia_hasta','operator'=>'<','message'=>'La vigencia inicio debe ser distinto a vigencia término'),


			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_horario, rut_estacionamiento, hora_inicio, hora_termino, dia_desde,dia_hasta', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_horario' => 'Id Horario',
			'rut_estacionamiento' => 'Rut Estacionamiento',
			'hora_inicio' => 'Hora Inicio',
			'hora_termino' => 'Hora Término',
			'dia_desde' => 'Vigencia Inicio',
			'dia_hasta' => 'Vigencia Término',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_horario',$this->id_horario);
		$criteria->compare('rut_estacionamiento',$this->rut_estacionamiento,true);
		$criteria->compare('hora_inicio',$this->hora_inicio,true);
		$criteria->compare('hora_termino',$this->hora_termino,true);
		$criteria->compare('dia_desde',$this->dia_desde,true);
		$criteria->compare('dia_hasta',$this->dia_hasta,true);


		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Horario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
