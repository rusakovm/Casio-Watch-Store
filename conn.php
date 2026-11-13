<?php

$severName = "DESKTOP-CD4JTVC\MyServ";
$database = "myBD";
$uid="";
$pass = "";
$connection = [
"Database" => $database,
"Uid" => $uid,
"PWD" => $pass
];

$conn = sqlsrv_connect($severName,$connection);
if (!$conn)
die(print_r(sqlsrv__errors(),true));

$tsql1 = "select * from comments";

$tsql = "insert into comments values ('fdsfdsfds')";


$stmt = sqlsrv_query($conn,$tsql);

$stmt = sqlsrv_query($conn,$tsql1);

if ($stmt == false){
    echo'Erorr';
}
While($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
    echo $obj['comment'].'</br>';
}
sqlsrv_free_stmt($stmt);
sqlsrv_close($conn)
?>