<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AnimeWiki</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">AnimeWiki</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?pg=conteudo">Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?pg=animes">O que é anime?</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Sobre
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?pg=quemsomos">Quem somos?</a></li>
            <li><a class="dropdown-item" href="?pg=faleconosco">Fale conosco!</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Listar
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/progweb/admin/listar.php">Animes</a></li>
            <li><a class="dropdown-item" href="http://localhost/progweb/admin/listar2.php">Manga</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

<?php

    include_once("topo.php");
    include_once("menu.php");

    if(empty($_SERVER["QUERY_STRING"])){

        $var = ("conteudo.php");
        include_once("conteudo.php");
    }else{

        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once("rodape.php");

?>