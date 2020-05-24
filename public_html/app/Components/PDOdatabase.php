<?php
namespace App\Components;
use PDO;
use Aura\SqlQuery\QueryFactory;

class PDOdatabase
{
    public $pdo;
    public function __construct() {
        //$this->pdo = new PDO("mysql:host=localhost; dbname=ch35098_jollywin", "ch35098_jollywin", "m0t0r0la");
        $this->pdo = new PDO("mysql:host=localhost; dbname=ch35098_myframe", "ch35098_myframe", "m0t0r0la");
    }

    public function all($table)
    {

        $queryFactory = new QueryFactory('mysql');
        $select = $queryFactory ->newSelect();
        $select->cols(["*"])
            ->from($table);
        //$pdo = new PDO("mysql:host=localhost; dbname=ch35098_myframe", "ch35098_myframe", "m0t0r0la");
        $sth = $this->pdo->prepare($select->getStatement());


        $sth->execute($select->getBindValues());

        $table = $sth->fetchAll(PDO::FETCH_ASSOC);

        return $table;


    }


    public function getOne($table, $id)
    {

        $queryFactory = new QueryFactory('mysql');
        $select = $queryFactory->newSelect();
        $select->cols(["*"])
            ->from($table)
            ->where('id=:id')
            ->bindValues(['id'=>$id]);
        //$pdo = new PDO("mysql:host=localhost; dbname=ch35098_myframe", "ch35098_myframe", "m0t0r0la");
        $sth = $this->pdo->prepare($select->getStatement());


        $sth->execute($select->getBindValues());

        $table = $sth->fetch(PDO::FETCH_ASSOC);

        return $table;
    }

    public function store($table, $data)
    {


        $queryFactory = new QueryFactory('mysql');
        $insert = $queryFactory->newInsert();
        $insert->into($table)             // insert into this table
        ->cols($data);

        //$pdo = new PDO("mysql:host=localhost; dbname=ch35098_myframe", "ch35098_myframe", "m0t0r0la");
        $sth = $this->pdo->prepare($insert->getStatement());

        $sth->execute($insert->getBindValues());

    }

    public function edit()
    {
        $templates = new \League\Plates\Engine('app/views/templates/');
        $queryFactory = new QueryFactory('mysql');
        $select = $queryFactory->newSelect();
        $select->cols(["*"])
            ->from($table)
            ->where('id=:id')
            ->bindValues(['id'=>$id]);
        //$pdo = new PDO("mysql:host=localhost; dbname=ch35098_myframe", "ch35098_myframe", "m0t0r0la");
        $sth = $this->pdo->prepare($select->getStatement());


        $sth->execute($select->getBindValues());

        $table = $sth->fetch(PDO::FETCH_ASSOC);

        return $table;
    }

    public function update($table, $id, $data)
    {
        $pdo = new PDO("mysql:host=localhost; dbname=ch35098_myframe", "ch35098_myframe", "m0t0r0la");
        $queryFactory = new QueryFactory('mysql');
        $update = $queryFactory->newUpdate();
        $update
            ->table($table)                  // update this table
            ->cols($data)          // raw value as "(ts) VALUES (NOW())"
            ->where('id = :id')
            ->bindValue('id', $id);

        $sth = $pdo->prepare($update->getStatement());

        $sth->execute($update->getBindValues());
    }

    public function delet($table, $id)
    {
        $pdo = new PDO("mysql:host=localhost; dbname=ch35098_myframe", "ch35098_myframe", "m0t0r0la");
        $queryFactory = new QueryFactory('mysql');
        $delete = $queryFactory->newDelete();
        $delete
            ->from($table)                  // update this table
            ->where('id = :id')
            ->bindValue('id', $id);
        $sth = $pdo->prepare($delete->getStatement());
        $sth->execute($delete->getBindValues());
        Flash::message('Success delete product!');

    }

    public function countStringBase($table)
    {
        $pdo = new PDO("mysql:host=localhost; dbname=ch35098_myframe", "ch35098_myframe", "m0t0r0la");
        return $member = $pdo ->query("SELECT COUNT(*) as count FROM $table")->fetchColumn();
    }



}

