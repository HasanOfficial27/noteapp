<?php

require_once(__DIR__."./database/database.php");

require_once(__DIR__."./database/note.php");

$db = new Database();

$notes = new Note($db);









function chr_print_h($arr, $length, $dot_option=false, $dot_link=null){

    if(strlen($arr) > $length){

        $char_arr = array();

        for($i=0; $i<$length; $i++){
            $char_arr[$i] = $arr[$i];
        }
        if($dot_option){
            $arr_text = implode($char_arr)."<a href='$dot_link' class='noteDesMore'>...</a>";
        }
        else{
            $arr_text = implode($char_arr);
        }
        return $arr_text;

    }
    else{
        return $arr;
    }

}



?>