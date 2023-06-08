<?php

namespace App\Mark;

use PDO;
use PDOException;
use App\Mark\Mark;


class MarkManager
{
    /** 
     * @var PDO
     */
    protected $pdo;

    /**
     * MarkManager constructor
     * 
     * @return void 
     */
    public function __construct()
    {
        require_once './conf/bdd.php';
        $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8';
        try {
            $this->pdo = new PDO($dsn, DB_USER, DB_PASS);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Retourne toute les marques de la base de données
     *
     * @return array
     */
    public function findAll(): array
    {
        try {
            $sql = 'SELECT * FROM marques';
            $q = $this->pdo->query($sql);
            $data = $q->fetchAll(PDO::FETCH_ASSOC);
            $marks = [];
            foreach ($data as $mark) {
                $marks[] = new Mark($mark);
            }
            return $marks;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Retourne une marque de la base de données
     *
     * @param int $id
     * @return Mark
     */
    public function find(int $id): Mark
    {
        try {
            $sql = 'SELECT * FROM marques WHERE id = :id';
            $q = $this->pdo->prepare($sql);
            $q->execute(['id' => $id]);
            $data = $q->fetch(PDO::FETCH_ASSOC);
            $mark = new Mark($data);
            return $mark;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * Crée une marque dans la base de données
     *
     * @param Mark $mark
     * @return Mark
     */
    public function create(Mark $mark): Mark
    {
        try {
            $sql = 'INSERT INTO marques (marque) VALUES (:name)';
            $q = $this->pdo->prepare($sql);
            $q->execute([
                'name' => $mark->getName()
            ]);
            $mark->setId($this->pdo->lastInsertId());
            return $mark;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
