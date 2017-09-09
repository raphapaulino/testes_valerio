<?php

include_once('../dd.php');
include_once('teste.class.php');

$filename = "names_and_addresses";

header("Content-type: text/csv");
header("Content-Disposition: attachment; filename={$filename}.csv");
header("Pragma: no-cache");
header("Expires: 0");

$obj = new Teste();
$obj->arrayToCsv( $obj->lerTxt($_FILES['send_txt_file']['name']) );