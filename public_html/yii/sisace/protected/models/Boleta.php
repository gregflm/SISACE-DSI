<?php

/**
 * This is the model class for table "boleta".
 *
 * The followings are the available columns in table 'boleta':
 * @property string $fecha_emision
 * @property string $fecha_ingreso
 * @property integer $num_boleta
 * @property integer $valor_total
 *
 * The followings are the available model relations:
 * @property Vehiculo $fechaIngreso
 */
class Boleta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'boleta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_emision, fecha_ingreso', 'required'),
			array('num_boleta, valor_total', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('fecha_emision, fecha_ingreso, num_boleta, valor_total', 'safe', 'on'=>'search'),
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
			'fechaIngreso' => array(self::BELONGS_TO, 'Vehiculo', 'fecha_ingreso'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'fecha_emision' => 'Fecha Emision',
			'fecha_ingreso' => 'Fecha Ingreso',
			'num_boleta' => 'Num Boleta',
			'valor_total' => 'Valor Total',
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

		$criteria->compare('fecha_emision',$this->fecha_emision,true);
		$criteria->compare('fecha_ingreso',$this->fecha_ingreso,true);
		$criteria->compare('num_boleta',$this->num_boleta);
		$criteria->compare('valor_total',$this->valor_total);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Boleta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
