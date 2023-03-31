<?php
include 'config.php';

if (isset($_GET['servers'])) {
    $query =  $conn->query("SELECT * FROM servers");
    $servers_list = array();
    while ($row = $query->fetch_array()) {
        array_push($servers_list, $row);
    }
    echo json_encode($servers_list);
}
//Get pro servers api
if (isset($_GET['admob'])) {
    $query =  $conn->query("SELECT * FROM `admob` WHERE `type`= 1");
    $servers_list = array();
    while ($row = $query->fetch_array()) {

        $r['app_id'] = $row['1'];
        $r['admob_banner'] = $row['2'];
        $r['admob_inter'] = $row['3'];
        $r['admob_native'] = $row['4'];
        $r['admob_openads'] = $row['5'];
        $r['active'] = $row['6'];

        array_push($servers_list, $r);
    }
    echo json_encode($servers_list);
}

//get Update Popup In App Project















