<?php
include_once 'koneksi.php';

/**
 * @var $connection PDO
 */

//query
$statement = $conn -> query("SELECT * FROM buku");

//hasil query
$statement -> setFetchMode(PDO::FETCH_ASSOC);

//eksekusi query
$result = $statement -> fetchAll();

//output
header('Content-Type: application/json');
echo json_encode($result);