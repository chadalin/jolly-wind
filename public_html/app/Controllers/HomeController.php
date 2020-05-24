<?php
namespace App\Controllers;
use League\Plates\Engine;
use App\Components\PDOdatabase;
class HomeController
{
    public $db;
    public function __construct(PDOdatabase $db)
    {
        $this->db = $db;
    }

    public function index()
    {


        $templates = new \League\Plates\Engine('app/Views/Templates/brights');
        $myTasks = $this->db->all('tasks');
        echo $templates->render('index', ['name' => $myTasks]);

    }

    public function post($id)
    {
        $templates = new \League\Plates\Engine('app/Views/Templates/brights');

        $tasks = $this->db->getOne('tasks', $id);
        //var_dump($tasks);
        echo $templates->render('post', ['post' => $tasks]);
    }

    public function getAllPosts()
    {
        $templates = new \League\Plates\Engine('app/Views/Templates/brights');
        $allposts = $this->db->all('tasks');


        echo $templates->render('allposts', ['allposts' => $allposts]);
    }


}