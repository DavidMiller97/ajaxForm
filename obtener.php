<?php
require_once 'conection.php';

$sql = "SELECT * FROM usuarios";
$result = pg_query($con, $sql);
$usuarios = pg_fetch_all($result, PGSQL_ASSOC);
echo $usuarios;

