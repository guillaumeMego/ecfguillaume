<?php
$title = 'marques';
defined('FROM_INDEX') or die('coquin');

ob_start();
?>
<h2 class="subtitle m-2 mb-3">Liste des <?= $title ?></h2>
<a href="/marques/add" class="nav-link"><i class="fa-solid fa-square-plus"></i> Ajouter un instrument</a>
<div class="d-flex flex-column mt-2 mx-4">
        <?php
        foreach ($datas as $data) : ?>
                <div class="text-center mt-4 bg-light">
                        <div class="d-flex justify-content-between align-items-center">
                                <h5 class="pt-2 ms-2"><?= $data['name'] ?></h5>
                                <div class="d-flex justify-content-between align-items-center">
                                        <a href="/marques/update/<?= $data['id'] ?>" class="nav-link"><i class="fa-solid fa-pencil"></i></a>
                                        <a href="/marques/delete/<?= $data['id'] ?>" class="nav-link"><i class="fa-solid fa-trash"></i></a>
                                </div>
                        </div>
                </div>
        <?php endforeach; ?>
</div>
<?php
$content = ob_get_clean();
require_once ROOT . '/views/template.php';
