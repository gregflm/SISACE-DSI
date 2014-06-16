<?php

/**
 * This is the model class for table "tarifa".
 *
 * The followings are the available columns in table 'tarifa':
 * @property string $id_tarifa
 * @property string $rut_estacionamiento
 * @property string $descripcion
 * @property integer $valor
 * @property string $vigencia
 *
 * The followings are the available model relations:
 * @property Estacionamiento $rutEstacionamiento
 */
class Tarifa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tarifa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('valor', 'numerical', 'integerOnly'=>true,'min'=>1),
			array('rut_estacionamiento', 'length', 'max'=>15),
			array('descripcion', 'length', 'max'=>30),
			array('vigencia', 'safe'),
			array('rut_estacionamiento','required','message' => 'Por favor, complete el campo Nombre estacionamiento'),
			array('descripcion','required','message' => 'Por favor, introduzca una descripciÃ³n'),
			array('valor','required','message' => 'Por favor, introduzca una tarifa'),
			array('vigencia','required','message' => 'Por favor, introduzca la fecha desde cuando comenzarÃ¡ a regir la tarifa'),

			array('descripcion','match','pattern' => '/^[a-zA-Záéíóú\s]+$/','message'=>'La {attribute} ingresada no es vÃ¡lida.'),
			array('descripcion','unique', 'className' => 'Tarifa','message'=>'La tarifa ingresada ya exite.'),

			
		//	array('vigencia','readOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_tarifa, rut_estacionamiento, descripcion, valor, vigencia', 'safe', 'on'=>'search'),
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
			'rutEstacionamiento' => array(self::BELONGS_TO, 'Estacionamiento', 'rut_estacionamiento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_tarifa' => 'Id Tarifa',
			'rut_estacionamiento' => 'Rut Estacionamiento',
			'descripcion' => 'DescripciÃ³n',
			'valor' => 'Valor (en pesos chilenos)',
			'vigencia' => 'Rige desde:',
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

		$criteria->compare('id_tarifa',$this->id_tarifa,true);
		$criteria->compare('rut_estacionamiento',$this->rut_estacionamiento,true);
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('valor',$this->valor);
		$criteria->compare('vigencia',$this->vigencia,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Tarifa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        protected function afterFind(){
    parent::afterFind();
    $this->vigencia=date('d F, Y', strtotime(str_replace("-", "", $this->vigencia)));       
}

protected function beforeSave(){
    if(parent::beforeSave()){
        $this->vigencia=date('Y-m-d', strtotime(str_replace(",", "", $this->vigencia)));
        return TRUE;
    }
    else return false;
}
}
