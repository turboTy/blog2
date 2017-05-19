<?php
require_once("./smarty/libs/Smarty.class.php");

require_once("./configs/db_conn.php");
require_once("./libs/mysql.func.php");

require_once("./inc/global_params.php");

$sql = "select * from users limit 0,1";
$result = $db->query($sql);
$num = $result->num_rows;

$row = $result->fetch_assoc();

var_dump($row);

echo "<hr>";















