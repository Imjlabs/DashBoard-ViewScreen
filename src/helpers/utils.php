<?php

require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR . 'bootstrap.php';

function db()
{
    $host = "localhost";
    $database = "camino";
    $user = "root";
    $password = "";
    $charset = "utf8mb4";

    require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "config" . DIRECTORY_SEPARATOR . 'db.php';
    try {
        return new PDO("mysql:host=$host;dbname=$database;charset=$charset", $user, $password);
    } catch (\Throwable $th) {
        throw $th;
    }
}

function view(string $file, array $var = [])
{
    if (!empty($var)) {
        foreach ($var as $key => $value) {
            $$key = $value;
        }
    }
    return require dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . "src" . DIRECTORY_SEPARATOR . "inc" . DIRECTORY_SEPARATOR . $file . '.php';
}
