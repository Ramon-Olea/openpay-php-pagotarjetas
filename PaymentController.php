<?php

//require_once "../../vendor/openpay/sdk/Openpay.php";
/*  require "../modelos/Charge.php";
 */ require(dirname(__FILE__) . '/Charge.php');
require(dirname(__FILE__) . '/Openpay/Openpay.php');
/* require('.Openpay/Openpay.php'); */

class Cargo
{
	private $openpay;

	public function __construct()
	{
		$this->openpay = Openpay::getInstance('mzpbsqasdasdasddsadsad', 'sk_218asdsadsdsadd');  //tus credenciales de api sustituir
		Openpay::setSandboxMode(true);
	}

	public function crearCargo($datos)
	{
		

		$customer = array(
			'name' => 'jhons soass',
			'last_name' => '',
			/* 'phone_number' => $datos[0]['telefono'], */
			'phone_number' => '4423456723',
			'email' => "prueba@gmail.com");
	   
	  /*  $chargeRequest = array(
		   "method" => "card",
		   'amount' => 100,
		   'description' => 'Cargo terminal virtual a mi merchant',
		   'customer' => $customer,
		   'send_email' => false,
		   'confirm' => false,
		   'redirect_url' => 'http://www.openpay.mx/index.html') */
	   ;
	   $chargeData = array(
		'method' => 'card',
		'source_id' => $datos[0]['token_id'],
		'amount' => 200, // formato númerico con hasta dos dígitos decimales. 
		'description' => 'prueba de formulario',
		/* 'use_card_points' => $_POST["use_card_points"], */ // Opcional, si estamos usando puntos
		'device_session_id' => $datos[0]['deviceIdHiddenFieldName'],
		'customer' => $customer
		);
		$charge = null;
		$errorMsg = null;
		$errorCode = null;

		try {
			$charge = $this->openpay->charges->create($chargeData);
		} catch (Exception $e) {
			$errorMsg = $e->getMessage();
			$errorCode =  $e->getCode();
		}

		$status = null;
		if ($errorMsg !== null || $errorCode !== null) { 
			/* $errorMsg = $this->getError($errorCode); */
			$status = array("status" => false, "charge" => $errorMsg, "errorCode" => $errorCode);
		} else {
			$status = array("status" => true, "charge" => json_encode($chargeData));
		}
		return $status;
	}


	public function crearCargoCodi()
	{
		
		$chargeMode  = array(
			'mode' => 'QR_CODE',

		);

		$customerData = array(
			'name' => 'User',
			'last_name' => 'Testing',
			'email' => 'Testing@payments.com',
			'phone_number' => '4421112233',
			'address' => array(
				'line1' => 'Privada Rio No. 12',
				'line2' => 'Co. El Tintero',
				'line3' => '',
				'postal_code' => '76920',
				'state' => 'Querétaro',
				'city' => 'Querétaro.',
				'country_code' => 'MX'
			)
		);

		$chargeData  = array(
			'method' => 'codi',
			'amount' => 200.00,
			'description' => 'Cargo con código QR',
			// 'order_id' => 'codi-00051',
			'codi_options' => '',
			'due_date' => '2020-12-20T13:45:00',
			'codi_options' => $chargeMode,
			'customer' => $customerData
		);

		$charge = $this->openpay->charges->create($chargeData);
		
		
		$chargeData = array(
    		'amount' => 200.00,
    		'description' => 'Cargo con código QR Estático',
    		'due_date' => '2020-07-20T13:45:00'
    		);

		$charge = $this->openpay->charges->create($chargeData);
		

		$responseJson = new \stdClass();
		$responseJson->status = true;
		$responseJson->msg = "Pago con suceso";
		$responseJson->id = $charge->id;
		$responseJson->status = $charge->status;
		$responseJson->charge = $charge->payment_method;

		echo json_encode($responseJson);
	}
}
