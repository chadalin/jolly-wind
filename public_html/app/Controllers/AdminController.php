<?php
namespace App\Controllers;
use App\Models\QueryBuilder;
use App\Models\Auth;

use App\Components\PDOdatabase;

class AdminController
{
    public $builder;
    public $db;
    public function __construct(QueryBuilder $builder, PDOdatabase $db)
    {
        $this->builder = $builder;
        $this->db = $db;
        var_dump($this->db);
    }

    public function index()
    {
        var_dump($this->builder->index());
    }
    public function createAdmin()
    {

    }

    public function storeAdmin()
    {

    }

    public function editAdmin()
    {

    }

    public function updateAdmin()
    {

    }

    public function deleteAdmin()
    {

    }

    public function statusAdmin()
    {

    }
}