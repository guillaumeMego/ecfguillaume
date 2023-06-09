<?php
namespace Classes\Models;
use PDO;
use PDOException;

/**
 * Manager de brand en BDD
 */
class BrandManager{
    protected $pdo;

    /**
     * Crée une connexion à la base de données dans l'attribut $pdo
     *
     * @param string $dbhost
     * @param string $dbname
     * @param string $dbuser
     * @param string $dbpass
     */
    public function __construct(
        string $dbhost = 'localhost', 
        string $dbname = 'instruments',
        string $dbuser = 'root',
        string $dbpass = 'root')
        {
           /*  $dsn = 'mysql:host='. $dbhost .';dbname=' . $dbname;
            try{
                $this->pdo = new PDO($dsn, $dbuser, $dbpass);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                die('Connexion à la BDD impossible ' . $e->getMessage());
            } */
            
        }

    /**
     * REtourne un tableau de toutes les  Mark
     *
     * @return array Un tableau d'entité Mark
     */
    public function findAll():array
    {
        /* $q = $this->pdo->query('SELECT id, marque as `name`, date_modif as `update` FROM marques');
        return $q->fetchAll(PDO::FETCH_CLASS, '\Classes\Models\Brand'); */
        $datas = [
            //date fr
            [
                'id' => '1',
                'name' => 'Fender',
                'update' => '01-04-2023'
            ],
            [
                'id' => '2',
                'name' => 'Gibson',
                'update' => '05-01-2019'
            ],
            [
                'id' => '3',
                'name' => 'Ibanez',
                'update' => '01-01-2016'
            ],
            [
                'id' => '4',
                'name' => 'Epiphone',
                'update' => '01-12-1998'
            ],
            [
                'id' => '5',
                'name' => 'Jackson',
                'update' => '04-07-2002'
            ],
            [
                'id' => '6',
                'name' => 'Charvel',
                'update' => '01-04-2003'
            ],
            [
                'id' => '7',
                'name' => 'ESP',
                'update' => '01-01-2004'
            ],
            [
                'id' => '8',
                'name' => 'PRS',
                'update' => '01-01-2020'
            ],
            [
                'id' => '9',
                'name' => 'Schecter',
                'update' => '07-01-2020'
            ],
            [
                'id' => '10',
                'name' => 'Squier',
                'update' => '02-11-2017'
            ],
            [
                'id' => '11',
                'name' => 'Gretsch',
                'update' => '08-18-2002'
            ],
            [
                'id' => '12',
                'name' => 'Guild',
                'update' => '01-18-2022'
            ],
            [
                'id' => '13',
                'name' => 'Martin',
                'update' => '09-06-2020'
            ],
            [
                'id' => '14',
                'name' => 'Taylor',
                'update' => '10-01-2000'
            ],
            [
                'id' => '15',
                'name' => 'Yamaha',
                'update' => '12-24-2004'
            ]
        ];
        return $datas;
    }


    /**
     * REtourne une marque
     *
     * @param integer $id
     * @return Brand
     */
    public function find(int $id):Brand
    {
        if($id<=0){
            throw new \Exception('Entier positif attendu', 127);
        }else{
            $q= $this->pdo->query('SELECT id, marque as `name`, date_modif as `update` 
            FROM marques 
            WHERE id=' . $id);
            return $q->fetchAll(PDO::FETCH_CLASS, '\Classes\Models\Brand')[0];
        }
    }


    /**
     * Ajoute une marque en BDD
     *
     * @param Brand $brand
     * @return Brand
     */
    public function create(Brand $brand): Brand
    {
        $sql = 'INSERT INTO marques(marque) VALUES(?)';
        $q = $this->pdo->prepare($sql);
       
        if($q->execute([$brand->getName()])){
            $id = $this->pdo->lastInsertId();
            return $this->find($id);
        }else{
            throw new PDOException('Un truc à la con pour inserton',200);
        }
    }
}