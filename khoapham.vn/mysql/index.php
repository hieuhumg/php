<?php
require "modelBase.php";
$db = connectDb();
$result = getData($db);
var_dump($result);