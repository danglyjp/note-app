<?php
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','memoapp');

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
mysqli_set_charset( $connection, 'utf8');

if (!$connection) {
    die("データベースへの接続に失敗する".mysqli_error($connection));
}
$query = "SELECT * FROM todo ORDER BY todo_id DESC";
$result = mysqli_query($connection,$query);

