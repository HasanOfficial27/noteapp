<?php
require_once("../core/function.php");

$note = $notes->getNote($_GET["id"]);

?>

<div class="singleNoteContainer">
    <div class="singleNoteBody">
        <h3><?php echo $note["note_title"]?></h3>
        <p><?php echo date("d M y", strtotime($note["note_date"]))?></p>

        <form action="../core/edit_note_core.php" method="post">
            <textarea name="note_value"rows="15" cols="70"><?php echo $note["note_value"]?></textarea>
            <input type="hidden" name="note_id" value="<?php echo $_GET["id"]?>"></br>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>


<?php


       





?>