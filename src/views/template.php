<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>La Théorie des Cordes | <?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../views/css/style.css">
</head>

<body>
    <header class="container">
        <div class="d-flex justify-content-center align-items-center ">
            <div class="container-fluid w-25 ms-0 mt-4">
                <a class="navbar-brand" href="#">
                    <img src="/img/logo.png" alt="Logo" width="250" class="d-inline-block align-text-top">
                </a>
            </div>
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item me-4 mt-4">
                                <a class="nav-link active" aria-current="page" href="/instruments">Les instruments</a>
                            </li>
                            <li class="nav-item me-4 mt-4">
                                <a class="nav-link" href="/marques">Les marques</a>
                            </li>
                            <li class="nav-item me-3 mt-4">
                                <a class="nav-link" href="/types">Les types</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="container ms-5 mt-5">
        <?= $content ?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d2f808818c.js" crossorigin="anonymous"></script>
</body>

</html>