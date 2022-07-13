  
<?php

require_once "./PaymentController.php";

/* print_r($_POST);
exit; */
$token_id = $_POST["token_id"];
$deviceIdHiddenFieldName = $_POST["deviceIdHiddenFieldName"];
/*  $token_id = $_POST["token_id"]; */

$datos = array(
    $_POST
);


$objCargo = new Cargo();
$resp = $objCargo->crearCargo($datos);

$jsonCharge =  json_encode($resp["charge"]);

if ($resp["status"] == true) {

    $responseJson = new \stdClass();
    $responseJson->status = true;
    $responseJson->msg = "Pago con suceso";
    $responseJson->charge = $jsonCharge;

    $myJSON = json_encode($responseJson);
    echo $myJSON;
} else {
/*     print_r($ret["error"]); */
$responseJson = new \stdClass();
$responseJson->status = false;
$responseJson->msg = "error";
$responseJson->charge = $jsonCharge;

$myJSON = json_encode($responseJson);
echo $myJSON;
}

?>