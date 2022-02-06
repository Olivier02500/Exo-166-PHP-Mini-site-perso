<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
    if(!isset($_GET['page'])){

        include __DIR__.'/../pages/home.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__.'/../pages/bio.php';

    }
    elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__.'/../pages/contact.php';
    }
}

function getPart($name) {
    include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData(){
    $file = file_get_contents('../data/user.json');
    $tableJson = json_decode($file, true);
    if (isset($tableJson)){
        $name = $tableJson['name'];
        $first_name = $tableJson['first_name'];
        $occupation = $tableJson['occupation'];
        $experiences = $tableJson['experiences'];

        echo $name . ' ';
        echo $first_name . ' ';
        echo $occupation . ' ';

        foreach ($experiences as $nom){
            foreach ($nom as $value) {
                echo $value . '<br>';
            }
        }
    }
}
