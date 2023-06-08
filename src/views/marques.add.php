<?php
defined('FROM_INDEX') or die();
$title = 'marques';
defined('FROM_INDEX') or die('coquin');
ob_start();
?>

    <h2 class="subtitle m-2 mb-3">Ajouter une marque</h2>
    <form action="/marques/add" method="post" class="d-flex flex-column mt-5 mx-auto">
        <div class="form-group">
            <label for="name" class="mb-1">Nom :</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nom de la marque" required>
        </div>
        <div class="d-flex justify-content-center mt-5">
       
        <a href="/marques" class="text-warning me-3 pt-1 annuler">Annuler</a>
        <button type="submit" class="btn bouton ms-3 px-3">Ajouter</button>
        </div>
        
    </form>
<?php
$content = ob_get_clean();
require_once ROOT . '/views/template.php';
