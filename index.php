<?php
require_once(__DIR__."./header.php");
?>




    <?php


        ?>
            <div class="newNoteCreatorCon">
                <form action="./core/create_note_core.php" method="post">
                    <input type="text" name="title" placeholder="Enter Title">
                    <input type="text" name="des" placeholder="Enter Your Note">
                    <button type="submit">Create</button>
                </form>
            </div>
            <div class="notesWrapper">
        <?php

            foreach ($notes->getNotes() as $note):

                ?>
                    <div class="noteBody">
                        <h3 class="title"><?php echo chr_print_h($note["note_title"],40)?></h3>
                        <p class="noteDate"><?php echo date("d M y", strtotime($note["note_date"]))?></p>
                        <p class="noteDes">
                            <?php 
                                //home made function
                                echo chr_print_h($note["note_value"], 204 ,true, "page/note.php?id={$note['note_id']}");
                                //home made function
                            ?>
                        </p>
                        <div class="btnCon">
                            <!-- <form action="./core/edit_note_core.php" method="post">
                                <input type="hidden" name="id" value="php echo $note["note_id"]?>">
                                <input type="hidden" name="chf_id" value="php echo $note["note_id"]?>">
                                <button class="edit">Edit</button>
                            </form> -->
                            <a href="./page/edit_note.php?id=<?php echo $note["note_id"]?>">Edit</a>
                            <form action="./core/delete_note_core.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $note["note_id"]?>">
                                <input type="hidden" name="chf_id" value="<?php echo $note["note_id"]?>">
                                <button class="delete" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                    
                <?php
            endforeach;

        ?>
            </div>
        <?php
    ?>







<?php
require_once(__DIR__."./footer.php");
?>