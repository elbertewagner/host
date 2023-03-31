<?php
header('Content-Type: application/json');

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include '../config.php';
  $products_arrFinal=array();

  $products_arr=array();
    $products_arr["Servers"]=array();

         $sql ="SELECT * FROM `servers`";

$listr = mysqli_query($conn, $sql);


while($result=mysqli_fetch_array($listr)){
$product_item=array(
              "server_id" => $result['server_id'],
            "HostName" => $result['HostName'],
              "Flag" => $result['Flag'],
               "IP" => $result['IP'],
            "ServerStatus" => $result['ServerStatus'],
              "Type" => $result['Type'],
              "user" => $result['user'],
              "password" => $result['password']
        );

 array_push($products_arr["Servers"], $product_item);
}

//echo json_encode($products_arr);



 $products_arr2=array();
    $products_arr2["Settings"]=array();

         $sql2 ="SELECT * FROM `admob`";

$listr2 = mysqli_query($conn, $sql2);


while($result2=mysqli_fetch_array($listr2)){
$product_item2=array(
              "app_id" => $result2['app_id'],
            "admob_banner" => $result2['admob_banner'],
              "admob_inter" => $result2['admob_inter'],
               "admob_native" => $result2['admob_native'],
            "admob_openads" => $result2['admob_openads'],
              "active" => $result2['active'],
              "admob_reward" => $result2['admob_reward']
        );

 array_push($products_arr2["Settings"], $product_item2);
}



$products_arr3=array();
    $products_arr3["Update"]=array();

         $sql3 ="SELECT * FROM `tbl_update`";

$listr3 = mysqli_query($conn, $sql3);


while($result3=mysqli_fetch_array($listr3)){
$product_item3=array(
              "version" => $result3['version'],
            "description" => $result3['description'],
              "url" => $result3['url'],
               "version_name" => $result3['version_name'],
            "dialogshow" => $result3['dialogshow']
           
        );

 array_push($products_arr3["Update"], $product_item3);
}


$products_arr4=array();
    $products_arr4["Timer"]=array();

         $sql4 ="SELECT * FROM `timer_add`";

$listr4 = mysqli_query($conn, $sql4);


while($result4=mysqli_fetch_array($listr4)){
$product_item4=array(
              "timevalue" => $result4['timevalue'],
            
        );

 array_push($products_arr4["Timer"], $product_item4);
}


$products_arrFinal=$products_arr+$products_arr2+$products_arr3+$products_arr4;



echo json_encode($products_arrFinal);
    
    
?>











