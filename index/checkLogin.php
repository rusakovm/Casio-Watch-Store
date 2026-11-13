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



$tsql = "Select * from users where login = '$Login'";

$stmt = sqlsrv_query($conn,$tsql);

While($obj = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
 
        if( $obj['psw'] == $Password){
            
            session_start();
            $_SESSION['data']=$Login;
            header('Location:./gh/main.php', true, 301);
            sqlsrv_free_stmt($stmt);
            sqlsrv_close($conn);
            exit();
        }
        else{
            header('Location:./gh/login.html', true, 301);
            sqlsrv_close($conn);
            exit();
        }
        
       
    
      
    }
    








?>