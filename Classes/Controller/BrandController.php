<?php 

namespace Classes\Controller;
use Classes\Models\BrandManager;

class BrandController 
{

    protected $manager;

    public function __construct()
    {
        $this->manager = new BrandManager();
    }


    public function index()
    {
       
        $brands = $this->manager->findAll();
        require_once ROOT . '/Views/index.php';
    }

    public function add()
    {
        if($_SERVER['REQUEST_METHOD'] === 'GET')
        {
            require_once ROOT .'/Views/brand.add.php';
        }

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            'Traitement du formulaire';
        }
    }
}
