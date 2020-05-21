<?php
namespace App\Controllers;

class HomeController
{
    public function index()
    {
        echo 'this is index';
        echo 'параметры сервера:' . "<br />\n";

        echo "Операционная система: " .
            $_SERVER["OS"] . "<br />\n";
        echo "Web-сервер: " .
            $_SERVER["SERVER_SOFTWARE"] . "<br />\n";
        echo "Имя сервера: " .
            $_SERVER["SERVER_NAME"] . "<br />\n";
        echo "Адрес сервера: " .
            $_SERVER["SERVER_ADDR"] . "<br />\n";
        echo "Порт сервера: " .
            $_SERVER["SERVER_PORT"] . "<br />\n";
        echo "Адрес клиента: " .
            $_SERVER["REMOTE_ADDR"] . "<br />\n";
        echo "Путь к документам на сервере: " .
            $_SERVER["DOCUMENT_ROOT"] . "<br />\n";
        echo "Полный путь к текущему скрипту: " .
            $_SERVER["SCRIPT_FILENAME"] . "<br />\n";
        echo "Имя текущего скрипта: " .
            $_SERVER["PHP_SELF"] . "<br />\n";
    }
}