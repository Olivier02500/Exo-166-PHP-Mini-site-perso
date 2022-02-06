<?php

$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage);

if (!empty($_POST)) {
    if (isset($_POST['userName']) && !empty($_POST['userName']) && isset($_POST['password']) && !empty($_POST['password'])) {
        $user = trim(strip_tags($_POST['userName']));
        if ($_POST['password'] === $_POST['password-repeat']){
            header('Location : bio.php');
        }
    }
}
else {
    echo "<p> Vos donnez ne sont pas correct... </p>";
}
