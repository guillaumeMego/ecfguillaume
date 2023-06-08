<?php

require_once __DIR__ . '/App/Mark/MarkManager.php';
require_once __DIR__ . '/App/Mark/Mark.php';

use App\Mark\MarkManager;
use App\Mark\Mark;




$markManager = new MarkManager();

$marksAll = $markManager->findAll();
$markId = $markManager->find(1);


$newMark = new Mark();
$newMark->setMarque('test');


$markManager->create($newMark);

var_dump($marksAll);
var_dump($markId);
var_dump($newMark);

