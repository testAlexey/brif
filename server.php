<?php/*print_r($_POST);*/$db = new mysqli ('localhost','root', '', 'Brif_test');if ($mysqli->connect_error) {    die('Connect Error: ' . $mysqli->connect-errno);}if ($_SERVER['REQUEST_METHOD'] == 'POST') {   $data = $_POST;    $sql = "INSERT INTO `brif`( `name_of_the_brief`, `name_company`) VALUES ('".$data['name_of_the_brief']."','".$data['name_company']."')";$db->query($sql);echo json_encode($data);/*exit();*/}