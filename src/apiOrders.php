<?php

include 'orders.php';

class ApiOrders{

function getOrders($filter, $value){
    $orders = new order();
    $ordersArray = array();
    $ordersArray['register'] = array();

    $result = $orders->getAll($filter, $value);

    if($result->rowCount()){
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            $register = array(
                'id_order' => $row['id_order'],
                'date' => $row['date'],
                'company' => $row['company'],
                'qty' => $row['qty']
        );
        array_push($ordersArray['register'], $register);
        }
        http_response_code(200);
       echo json_encode($ordersArray);
    }else{
        http_response_code(404);
        echo json_encode(array('message' => 'Element not found'));
    }
}

}

$api = new ApiOrders();

if(isset($_GET["date"])){
    $filter="date";
    $api->getOrders($filter, $_GET["date"]);

}elseif(isset($_GET["company"])){
    $filter="company";
    $api->getOrders($filter, $_GET["company"]);
}else{
    $api->getOrders("", "");
}

var_dump($_GET);



?>