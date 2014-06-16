<?php

/**
 * This is the model class for table "horario".
 *
 * The followings are the available columns in table 'horario':
 * @property integer $id_horario
 * @property string $rut_estacionamiento
 * @property string $hora_inicio
 * @property string $hora_termino
 * @property string $dia
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
			array('dia', 'length', 'max'=>40),
			array('rut_estacionamiento','required','message' => 'Por favor, ingrese el rut del estacionamiento.'),
			array('hora_inicio','required','message' => 'Por favor, ingrese la hora de inicio.'),
			array('hora_termino','required','message' => 'Por favor, ingrese la hora de termino.'),
			array('dia','required'),
			array('rut_estacionamiento', 'validateRut'),
			array('dia','match','pattern' => '/^[a-zA-Záéíóú\s]+$/','message'=>'El {attribute} no es válido.'),

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_horario, rut_estacionamiento, hora_inicio, hora_termino, dia', 'safe', 'on'=>'search'),
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
			'hora_termino' => 'Hora Termino',
			'dia' => 'Día',
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
		$criteria->compare('dia',$this->dia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function validateRut($attribute, $params) {
        $data = explode('-', $this->rut_estacionamiento);
        $evaluate = strrev($data[0]);
        $multiply = 2;
        $store = 0;
        for ($i = 0; $i < strlen($evaluate); $i++) {
            $store += $evaluate[$i] * $multiply;
            $multiply++;
            if ($multiply > 7)
                $multiply = 2;
        }
        isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
        $result = 11 - ($store % 11);
        if ($result == 10)
            $result = 'k';
        if ($result == 11)
            $result = 0;
        if ($verifyCode != $result)
            $this->addError('rut_estacionamiento', 'El Rut no es válido.');
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
