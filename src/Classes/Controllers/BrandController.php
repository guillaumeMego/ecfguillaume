<?php


namespace Classes\Controllers;

use Classes\Models\BrandManager;


class BrandController
{
    protected $manager;

    public function __construct()
    {
        // $this->manager = new BrandManager();
    }

    public function index()
    {
        /* $data = $this->manager->findAll(); */
        $datas = [
            //date fr
            [
                'id' => '1',
                'name' => 'Fender',
                'update' => '01-01-2020'
            ],
            [
                'id' => '2',
                'name' => 'Gibson',
                'update' => '01-01-2020'
            ],
            [
                'id' => '3',
                'name' => 'Ibanez',
                'update' => '01-01-2020'
            ],
            [
                'id' => '4',
                'name' => 'Epiphone',
                'update' => '01-01-2020'
            ],
            [
                'id' => '5',
                'name' => 'Jackson',
                'update' => '01-01-2020'
            ],
            [
                'id' => '6',
                'name' => 'Charvel',
                'update' => '01-01-2020'
            ],
            [
                'id' => '7',
                'name' => 'ESP',
                'update' => '01-01-2020'
            ],
            [
                'id' => '8',
                'name' => 'PRS',
                'update' => '01-01-2020'
            ],
            [
                'id' => '9',
                'name' => 'Schecter',
                'update' => '01-01-2020'
            ],
            [
                'id' => '10',
                'name' => 'Squier',
                'update' => '01-01-2020'
            ],
            [
                'id' => '11',
                'name' => 'Gretsch',
                'update' => '01-01-2020'
            ],
            [
                'id' => '12',
                'name' => 'Guild',
                'update' => '01-01-2020'
            ],
            [
                'id' => '13',
                'name' => 'Martin',
                'update' => '01-01-2020'
            ],
            [
                'id' => '14',
                'name' => 'Taylor',
                'update' => '01-01-2020'
            ],
            [
                'id' => '15',
                'name' => 'Yamaha',
                'update' => '01-01-2020'
            ]
        ];
        require_once ROOT . '/views/marques.index.php';
    }


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            require_once ROOT . '/views/marques.add.php';
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['name'])) {
                if (empty($_POST['name'])) {
                    trigger_error('Auteur est vide', E_USER_WARNING);
                    header('Location: /marques/add');
                }
                $name = htmlspecialchars($_POST['name']);
                $this->manager->add($name);
                header('Location: /marques');
            }
        }
    }
}
