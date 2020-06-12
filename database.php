<?php
$servername="localhost";
$username="root";
$databasename="db_huong1";
$password="";
$sql = mysqli_connect($servername, $username, $password, $database);

if (!$sql) {
    exit('Kết nối không thành công!');
}
// thành công
echo 'Kết nối thành công!';
?>