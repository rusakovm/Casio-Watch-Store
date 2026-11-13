<?php
session_start();
$login = trim((string)($_POST['Login'] ?? ''));
$password = (string)($_POST['Password'] ?? '');
if ($login === '' || $password === '') { header('Location: /gh/registration.html', true, 303); exit; }
require __DIR__.'/db.php';
$stmt = sqlsrv_query($conn, 'SELECT login FROM users WHERE login = ?', [$login]);
if ($stmt === false) { http_response_code(500); exit('Ошибка проверки пользователя'); }
$exists = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
sqlsrv_free_stmt($stmt);
if ($exists) { sqlsrv_close($conn); header('Location: /gh/registration.html', true, 303); exit; }
// Keep old database schema, store hashed password in psw column (needs >= 255 chars).
$stmt = sqlsrv_query($conn, 'INSERT INTO users (login, psw) VALUES (?, ?)', [$login, password_hash($password, PASSWORD_DEFAULT)]);
if ($stmt === false) { error_log(print_r(sqlsrv_errors(), true)); http_response_code(500); exit('Ошибка регистрации: проверьте поля users и размер psw'); }
sqlsrv_free_stmt($stmt); sqlsrv_close($conn);
session_regenerate_id(true); $_SESSION['data'] = $login;
header('Location: /gh/main.php', true, 303); exit;
