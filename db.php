<?php
$serverName = 'DESKTOP-CD4JTVC\\MyServ';
$connectionInfo = ['Database' => 'myBD', 'CharacterSet' => 'UTF-8', 'TrustServerCertificate' => true];
$conn = sqlsrv_connect($serverName, $connectionInfo);
if ($conn === false) { error_log(print_r(sqlsrv_errors(), true)); http_response_code(500); exit('Ошибка подключения к SQL Server'); }
