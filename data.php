<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') { header('Location: /gh/main.php'); exit; }
$comment = trim((string)($_POST['Comment'] ?? ''));
$page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT);
$back = $page && $page > 0 ? '/cardAbout.php?page='.$page : '/comments.php';
if ($comment === '') { header('Location: '.$back); exit; }
require __DIR__.'/db.php';
// The original code uses table comment and two values (comment, timezone).
$stmt = sqlsrv_query($conn, 'INSERT INTO comment VALUES (?, ?)', [$comment, date_default_timezone_get()]);
if ($stmt === false) { error_log(print_r(sqlsrv_errors(), true)); http_response_code(500); exit('Ошибка сохранения комментария: проверьте структуру таблицы comment'); }
sqlsrv_free_stmt($stmt); sqlsrv_close($conn);
header('Location: '.$back, true, 303); exit;
