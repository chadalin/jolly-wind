<?php
namespace App\Controllers;
use App\Models\QueryBuilder;

use League\Plates\Engine;
use App\Components\PDOdatabase;
class PostControllers
{
    public $builder;
    public $db;
    public function __construct(QueryBuilder $builder, PDOdatabase $db)
    {
        $this->builder = $builder;
        $this->db = $db;

    }
    public function index()
    {
        
    }
    public function show()
    {

    }
    public function store()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function delete()
    {

    }

}