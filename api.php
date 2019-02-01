<?php

$options = array("location" =>  "http://localhost/pro/webservices/service.php",
"uri" => "http://localhost");





$client = new SoapClient(null, $options);

$data = $client->get_service();




$id =  $_GET['id'];
$arr = [];
    
foreach($data as $ud) {
if($id == $ud['id']){	


$arr = [

		'user_name' => $ud['user_name'],
		'fundname' => $ud['fundname'],
		'bal' => $ud['bal'],
		'limit' => $ud['limit'],
		'remaining_bal' => $ud['remaining_bal']

];


echo json_encode($arr);


}

}













?>
