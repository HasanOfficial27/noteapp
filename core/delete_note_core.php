<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once(__DIR__."./function.php");


    $id = $_POST["id"];
    $notes->deleteNote($id);

}
else{
    echo "Opps u are trying to do something illegal";
}


?>