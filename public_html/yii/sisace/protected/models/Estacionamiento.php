<?php

/**
 * This is the model class for table "estacionamiento".
 *
 * The followings are the available columns in table 'estacionamiento':
 * @property string $rut_estacionamiento
 * @property string $nombre_estacionamiento
 * @property string $representante_legal
 * @property string $direccion
 * @property integer $plazas_disponibles
 *
 * The followings are the available model relations:
 * @property Tarifa[] $tarifas
 */
class Estacionamiento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estacionamiento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('plazas_disponibles', 'numerical', 'integerOnly'=>true,'min'=>0),
			array('rut_estacionamiento', 'length', 'max'=>15),
			array('nombre_estacionamiento, representante_legal, direccion', 'length','min'=>5, 'max'=>40),
			array('rut_estacionamiento','required','message' => 'Por favor, ingrese el rut del estacionamiento.'),
			array('nombre_estacionamiento','required','message' => 'Por favor, ingrese el nombre estacionamiento.'),
			array('representante_legal','required','message' => 'Por favor, ingrese el nombre del representante legal.'),
			array('direccion','required','message' => 'Por favor, ingrese la dirección del estacionamiento.'),
			array('plazas_disponibles','required','message' => 'Por favor, ingrese el número de plazas disponibles del estacionamiento.'),
			

			array('rut_estacionamiento', 'validateRut'),
			array('rut_estacionamiento','unique', 'className' => 'Estacionamiento','message'=>'El rut ingresado ya existe.'),
			array('nombre_estacionamiento','match','pattern' => '/^[a-zA-Z,-.áéíóú\s]+$/','message'=>'El {attribute} no es válido.'),
			array('representante_legal','match','pattern' => '/^[a-zA-Z,-.áéíóú&\s]+$/','message'=>'El {attribute} no es válido.'),
			array('direccion','match','pattern' => '/^[a-zA-Z0-9,-.áéíóú\s]+$/','message'=>'El {attribute} no es válido.'),
			

			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rut_estacionamiento, nombre_estacionamiento, representante_legal, direccion, plazas_disponibles', 'safe', 'on'=>'search'),
			
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
			'tarifas' => array(self::HAS_MANY, 'Tarifa', 'rut_estacionamiento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rut_estacionamiento' => 'Rut Estacionamiento',
			'nombre_estacionamiento' => 'Nombre Estacionamiento',
			'representante_legal' => 'Representante Legal',
			'direccion' => 'Dirección',
			'plazas_disponibles' => 'Plazas Disponibles',
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

		$criteria->compare('rut_estacionamiento',$this->rut_estacionamiento,true);
		$criteria->compare('nombre_estacionamiento',$this->nombre_estacionamiento,true);
		$criteria->compare('representante_legal',$this->representante_legal,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('plazas_disponibles',$this->plazas_disponibles);

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
            $this->addError('rut_estacionamiento', 'El Rut ingresado no es válido.');
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estacionamiento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
