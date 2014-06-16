<?php
 

require('fpdf.php');



date_default_timezone_set("America/Santiago");

include 'fpdf/fpdf.php';

$conexion;
if(!($conexion = mysql_connect('localhost','grupo2','face2014'))){
	echo "error";
 	exit();
}else{
 		$conexion = mysql_connect('localhost','grupo2','face2014');
 		mysql_select_db("sisace",$conexion);

	

               
	 }

 class voucher extends FPDF{

	public function Header()
	{	
		//Se obtiene todos los datos del estacionamiento desde la base de datos
		$consulta = mysql_query ("SELECT E.nombre_estacionamiento,E.rut_estacionamiento FROM estacionamiento E");
		$datos = mysql_fetch_array($consulta);
		$nombre = $datos['nombre_estacionamiento'];
		$rut = $datos['rut_estacionamiento'];
		
		$this->SetFont('Arial','',15);
		$this->Cell(20,10,$nombre);
		$this->Ln(5);
		$this->Cell(20,10,'Rut: '.$rut);
		$this->Ln(10);

		$this->SetFont('Arial','B',15);
		$this->Cell(20,10,'BOLETA');
		$this->Ln(10);
				
		$this->SetFont('Arial','U',15);
		$this->Cell(20);
		$this->Cell(20,10,'TARIFA');
		$this->Ln(8);
		$this->SetFont('Arial','',15);
		
		//Se obtienen los datos de todas las tarifas pertenecientes al estacionamiento
		$consulta = mysql_query("SELECT T.valor,T.descripcion FROM tarifa T,estacionamiento E WHERE T.rut_estacionamiento = '".$rut."' ");
		
		while ($datos = mysql_fetch_array($consulta)){
			$valor = (string) $datos['valor'];
			$descripcion = $datos['descripcion'];
			$this->Cell(20,10,' $ '.$valor.' '.$descripcion);
			$this->Ln(5);
		}
		
		//$plazas = "SELECT plazas_disponibles FROM estacionamiento";
		$resultado = mysql_query("SELECT plazas_disponibles FROM estacionamiento");
                $sumarE = mysql_result($resultado, 0);
                $sumarE = $sumarE+1;
                
               $updatePlazas = "UPDATE estacionamiento SET plazas_disponibles = '$sumarE'";
               mysql_query($updatePlazas);

		
		$this->Ln(5);
		$this->SetFont('Arial','U',15);
		$this->Cell(20);
		$this->Cell(20,10,'HORARIOS');
		$this->Ln(8);
		$this->SetFont('Arial','',15);

		//Se obtienen los datos de los horarios
		$consulta = mysql_query("SELECT H.dia, H.hora_inicio, H.hora_termino FROM horario H WHERE H.rut_estacionamiento ='".$rut."' ");
		
		while($datos = mysql_fetch_array($consulta)){
			$descripcion = $datos['dia'];
			$inicio = substr((string)$datos['hora_inicio'],0,-3);
			$termino = substr((string)$datos['hora_termino'],0,-3);
			$this->Cell(20,10,$descripcion.' de '.$inicio.' a '.$termino);
			$this->Ln(5);
		}

		//Colocar fecha y hora de forma dinamica
		$this->Ln(5);
		$ingreso = date('Y-m-d  h:i:s' );
                $fechaE = $_POST['fecha2'];
		$this->Cell(20,10,'ENTRADA '.$fechaE);
		$this->Ln(5);
		$consulta = "INSERT INTO `voucher`(`fecha_ingreso`, `rut_estacionamiento`) VALUES ('".$ingreso."','".$rut."')";
		mysql_query($consulta);
                $fechaS= $_POST['fecha'];
                		$this->Ln(5);

                $this->Cell(20,10,'SALIDA     '.$fechaS);
                $this->Ln(5);
                $cobro = $_POST['cobro'];
$vuelto = $_POST['vuelto'];
 
$vuelto2 = $vuelto - $cobro;
                
                
                $this->Ln(5);
		$this->SetFont('Arial','U',15);
		$this->Cell(20);
		$this->Cell(20,10,'COBRO');
		$this->Ln(8);
		$this->SetFont('Arial','',15);
                $this->Cell(20,10,'Su cobro '.$cobro,0,1);
                $this->Cell(20,10,'Pago con '.$vuelto,0,1);
                $this->Cell(20,10,'Su vuelto es '.$vuelto2,0,1);
                
                }

  	public function EAN13($x, $y, $barcode, $h=16, $w=.35){
        $this->Barcode($x,$y,$barcode,$h,$w,13);
    }

    private function GetCheckDigit($barcode){
        $sum=0;
        for($i=1;$i<=11;$i+=2)
            $sum+=3*$barcode[$i];
        for($i=0;$i<=10;$i+=2)
            $sum+=$barcode[$i];
            $r=$sum%10;
        if($r>0)
            $r=10-$r;
        return $r;
    }

    private function TestCheckDigit($barcode){
        $sum=0;
        for($i=1;$i<=11;$i+=2)
            $sum+=3*$barcode[$i];
        for($i=0;$i<=10;$i+=2)
            $sum+=$barcode[$i];
        return ($sum+$barcode[12])%10==0;
    }

    private function Barcode($x, $y, $barcode, $h, $w, $len){
        $barcode=str_pad($barcode,$len-1,'0',STR_PAD_LEFT);
        if($len==12)
            $barcode='0'.$barcode;
   
        if(strlen($barcode)==12)
            $barcode.=$this->GetCheckDigit($barcode);
        else if(!$this->TestCheckDigit($barcode))
            $this->Error('Digito Incorrecto');
   
        $codes=array(
            'A'=>array(
                '0'=>'0001101','1'=>'0011001','2'=>'0010011','3'=>'0111101','4'=>'0100011',
                '5'=>'0110001','6'=>'0101111','7'=>'0111011','8'=>'0110111','9'=>'0001011'),
            'B'=>array(
                '0'=>'0100111','1'=>'0110011','2'=>'0011011','3'=>'0100001','4'=>'0011101',
                '5'=>'0111001','6'=>'0000101','7'=>'0010001','8'=>'0001001','9'=>'0010111'),
            'C'=>array(
                '0'=>'1110010','1'=>'1100110','2'=>'1101100','3'=>'1000010','4'=>'1011100',
                '5'=>'1001110','6'=>'1010000','7'=>'1000100','8'=>'1001000','9'=>'1110100')
        );
        $parities=array(
            '0'=>array('A','A','A','A','A','A'),
            '1'=>array('A','A','B','A','B','B'),
            '2'=>array('A','A','B','B','A','B'),
            '3'=>array('A','A','B','B','B','A'),
            '4'=>array('A','B','A','A','B','B'),
            '5'=>array('A','B','B','A','A','B'),
            '6'=>array('A','B','B','B','A','A'),
            '7'=>array('A','B','A','B','A','B'),
            '8'=>array('A','B','A','B','B','A'),
            '9'=>array('A','B','B','A','B','A')
        );
        $code='101';
        $p=$parities[$barcode[0]];

        for($i=1;$i<=6;$i++)
            $code.=$codes[$p[$i-1]][$barcode[$i]];
        $code.='01010';

        for($i=7;$i<=12;$i++)
            $code.=$codes['C'][$barcode[$i]];
            $code.='101';
      
       for($i=0;$i<strlen($code);$i++){
            if($code[$i]=='1')
                $this->Rect($x+$i*$w,$y,$w,$h,'F');
        }

        $this->SetFont('Arial','',12);
        $this->Text($x,$y+$h+11/$this->k,substr($barcode,-$len)); //Agrega el número abajo del código de barra
    }
}
$mipdf = new voucher();
$mipdf->FPDF('P','mm',array(100 ,200));
$mipdf->addPage();
$codigo = (int)date('Ymdhi');
$mipdf->EAN13(30,150,$codigo);
$mipdf->Output();
$mipdf->Close();
?>