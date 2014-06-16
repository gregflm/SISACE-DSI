<?php
class FechaForm extends CFormModel
{
	public $año;
	public $mes;

	public function rules()
	{
		return array(
				array("año,mes","required"),
			);
	}
}