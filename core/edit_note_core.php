<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once(__DIR__."./function.php");


    $note_id = $_POST["note_id"];
    $note_value = $_POST["note_value"];

    $notes->editNote($note_id, $note_value);

}
else{
    echo "Opps u are trying to do something illegal";
}


?>