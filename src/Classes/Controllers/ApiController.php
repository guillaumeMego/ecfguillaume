<?php 
namespace Classes\Controllers;

use Classes\Models\BrandManager;
use Exception;

class ApiController 
{
    public function getBrands()
    {
        $brand = (new BrandManager())->findAll();
        $this->render($brand);
    }

    public function render (array $data)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        $str = json_encode($data);
        $err = json_last_error();
        if ($err) {
            throw new Exception($err);
        }
        echo $str;
    }
}
?>