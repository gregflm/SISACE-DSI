<?php
class FechaForm extends CFormModel
{
	public $anho;
	public $mes;

	public function rules()
	{
		return array(
				array("anho,mes","required"),
			);
	}
}