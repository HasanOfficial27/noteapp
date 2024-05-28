<?php
require_once("../core/function.php");


$note = $notes->getNote($_GET["id"]);


?>

<div class="singleNoteContainer">
    <div class="singleNoteBody">
        <h3><?php echo $note["note_title"]?></h3>
        <p><?php echo date("d M y", strtotime($note["note_date"]))?></p>

        <p><?php echo $note["note_value"]?></p>
    </div>
</div>


<?php


       





?>