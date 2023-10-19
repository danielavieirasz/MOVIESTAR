<?php
    require_once("templates/header.php");


    //Verifica se o usuario esta autenticado 
    require_once("models/Movie.php");
    require_once("dao/MovieDAO.php");

    //pegar o id do filme
    $id =filter_input(INPUT_GET, "id");

    $movie;

    $movieDAO = new MovieDAO($conn, $BASE_URL);

    if(empty($id)) {
        
        $message->setMessage("O filme não foi econtrado!", "error","index.php");

    } else {
        $movie =$movieDao->findById($id);

        // verifica se o filme existe

        if(!$movie) {

            $message->setMessage("O filme não foi encontrado!","error","index.php");
            
        }
    }