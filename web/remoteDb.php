<?php


$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
$conn->query('create table if not EXISTS user (id int(11))');
$res = $conn->query('show tables');

var_dump($res->fetch_array());