<?php
session_start();
$login = trim((string)($_POST['Login'] ?? ''));
$password = (string)($_POST['Password'] ?? '');
if ($login === '' || $password === '') { header('Location: /gh/login.html', true, 303); exit; }
require __DIR__.'/db.php';
$stmt = sqlsrv_query($conn, 'SELECT psw FROM users WHERE login = ?', [$login]);
if ($stmt === false) { error_log(print_r(sqlsrv_errors(), true)); http_response_code(500); exit('Ошибка авторизации'); }
$row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
$valid = $row && (password_verify($password, (string)$row['psw']) || hash_equals((string)$row['psw'], $password));
sqlsrv_free_stmt($stmt); sqlsrv_close($conn);
if (!$valid) { header('Location: /gh/login.html', true, 303); exit; }
session_regenerate_id(true); $_SESSION['data'] = $login;
header('Location: /gh/main.php', true, 303); exit;
