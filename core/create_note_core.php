<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once(__DIR__."./function.php");


    $title = $_POST["title"];
    $des = $_POST["des"];

    $notes->newNote($title, $des);

}
else{
    echo "Opps u are trying to do something illegal";
}


?>