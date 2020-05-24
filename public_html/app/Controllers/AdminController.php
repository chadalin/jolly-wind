<?php
namespace App\Controllers;
use App\Models\QueryBuilder;

use League\Plates\Engine;
use App\Components\PDOdatabase;



class AdminController
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
        var_dump($this->builder->index());
        $templates = new \League\Plates\Engine('app/Views/Admin');
        $myTasks = $this->db->all('tasks');
        echo $templates->render('index', ['name' => $myTasks]);
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

    public function users()
    {
        $templates = new \League\Plates\Engine('app/Views/Admin');
        $users = $this->db->all('users');
        echo $templates->render('users/index', ['allUsers' => $users]);
    }

    public function createUsers()
    {
        $templates = new \League\Plates\Engine('app/Views/Admin');
        $myTasks = $this->db->all('users');
        echo $templates->render('users/create', ['name' => $myTasks]);
    }

    public function editUsers()
    {
        $templates = new \League\Plates\Engine('app/Views/Admin');
        $myTasks = $this->db->all('tasks');
        echo $templates->render('users/edit', ['name' => $myTasks]);
    }

    public function createEdit()
    {
        $templates = new \League\Plates\Engine('app/Views/Admin');
        $myTasks = $this->db->all('tasks');
        echo $templates->render('users/edit', ['name' => $myTasks]);

    }

    public function addUsers()
    {

        $myTasks = $this->db->store('users',$_POST);
        header('Location: /admin/users');

    }

    
}