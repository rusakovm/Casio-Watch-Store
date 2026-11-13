<?php
$Comment = $_POST['Comment'];

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
    
    $timezone = date_default_timezone_get();
    
    
    if (!$conn)
    die(print_r(sqlsrv__errors(),true));

    $tsql = "insert into comment values ('$Comment', '$timezone')";
    $stmt = sqlsrv_query($conn,$tsql);


    sqlsrv_close($conn);

    header('Location:./gh/main.php/echo $page', true, 301);
    exit();
    ?>