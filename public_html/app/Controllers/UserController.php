<?php
namespace App\Controllers;
use App\Models\QueryBuilder;
use App\Models\Auth;
use League\Plates\Engine;
use App\Components\PDOdatabase;
class UserController
{
    public function index()
    {
        echo 'this is usercontrolles';
    }

    public function users($id)
    {
        echo 'users'.$id;
    }

    public function createUser()
    {

    }
    public function editUser()
    {

    }

    public function updateUser()
    {

    }

    public function deleteUser()
    {

    }

    public function statusUser()
    {

    }


}