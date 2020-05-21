<?php
namespace App\Components;
use PDO;

class PDOdatabase
{
    public $pdo;
    public function __construct() {
        $this->pdo = new PDO("mysql:host=localhost; dbname=ch35098_jollywin", "ch35098_jollywin", "m0t0r0la");

    }
}