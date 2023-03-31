<?php
header('Content-Type: application/json');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

 include('connection.php');

  $products_arr=array();
    $products_arr["data"]=array();

         $sql ="SELECT * FROM `admob`";

$listr = mysqli_query($mysqli, $sql);


while($result=mysqli_fetch_array($listr)){
$product_item=array(
              "category_id" => $result['admob_banner'],
              "category_name" => $result['admob_inter'],
              "ff" => $result['admob_native'],
               "gg" => $result['admob_openads'],
                "hh" => $result['active'],
            
        );
 
 array_push($products_arr["data"], $product_item);
}

echo json_encode($products_arr);
    
    
?>
















