<?php

echo'
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-site" aria-controls="nav-site" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav-site">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item"><a class="nav-link" href="Index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Historia da Arte</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="Historia-da-arte.php">História da arte</a>
                <a class="dropdown-item" href="Especiesdaarte.php">Espécies da Arte</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tatuagens</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="Tatuagens.php">Historia da tatuagem</a>
                <a class="dropdown-item" href="Modelos-tatuagens.php">Modelos</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Arte e Cultura</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="Arteecultura.php">Arte e Cultura</a>
                <a class="dropdown-item" href="Modelos-artecultural.php">Modelos</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Arte Tribal</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="Arte-tribal.php">História da Arte Tribal</a>
                <a class="dropdown-item" href="Modelos-artetribal.php">Modelos</a>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="Quem-somos.php">Quem Somos</a></li>
        <li class="nav-item"><a class="nav-link" href="Contatos.php">contatos</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="pesquisar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
    </form>
</div>
</nav>
</div>';
