<?php

$conn = new mysqli('localhost', 'root', '', 'auttaa');

$res = $conn->query('show tables;');

var_dump($res->fetch_array());