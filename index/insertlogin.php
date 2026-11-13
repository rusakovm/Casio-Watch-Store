<?php

$Login = $_POST['Login'];
$Password = $_POST['Password'];
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



$tsql1 = "select * from users where login='$Login'";
echo $tsql1 ;

$stmt = sqlsrv_query($conn,$tsql1);

$obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC);

if($obj)
{
    header('Location:./gh/registration.html', true, 301);
    sqlsrv_close($conn);
    exit();
}

 else {
    $tsql = "insert into users values ('$Login', '$Password')";
    $stmt = sqlsrv_query($conn,$tsql);


    sqlsrv_close($conn);
    session_start();
    $_SESSION['data']=$Login;
    header('Location:./gh/main.php', true, 301);
    exit();
}


?>