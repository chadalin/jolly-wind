<?php
namespace App\Controllers;
use App\Models\QueryBuilder;
class AdminController
{
    public $builder;
    public function __construct(QueryBuilder $builder)
    {
        $this->builder = $builder;
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