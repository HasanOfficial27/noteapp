<?php


class Note{

    public $db = null;

    public function __construct(Database $dbd){
        if(!isset($dbd->connect)) return null;
        $this->db = $dbd;
    }

    public function getNotes(){
        $query = "SELECT * FROM `note`";
        $run_q = mysqli_query($this->db->connect, $query);

        $notes_arry = array();

        if($run_q){
            while($single_note = mysqli_fetch_assoc($run_q)){
                $notes_arry[] = $single_note;
            }
        }
        return $notes_arry;
    }

    public function getNote($id){
        $query = "SELECT * FROM `note` WHERE `note_id`=?";
        $sql_stmt = mysqli_prepare($this->db->connect, $query);
        mysqli_stmt_bind_param($sql_stmt, "s", $id);

        if(mysqli_stmt_execute($sql_stmt)){
            $result = mysqli_stmt_get_result($sql_stmt);
            $note_data = mysqli_fetch_assoc($result);            
        }
        return $note_data;
    }

    public function newNote($noteTitle, $noteDes){
        $query = "INSERT INTO `note`(`note_title`, `note_value`) VALUES(?,?)";
        $sql_stmt = mysqli_prepare($this->db->connect, $query);
        mysqli_stmt_bind_param($sql_stmt, "ss", $noteTitle, $noteDes);

        if(mysqli_stmt_execute($sql_stmt)){
            echo "Note added!";
            header("location:../index.php");
        }
    }

    public function deleteNote($id){
        $query = "DELETE FROM `note` WHERE `note_id`=?";
        $sql_stmt = mysqli_prepare($this->db->connect, $query);
        mysqli_stmt_bind_param($sql_stmt, "s", $id);

        if(mysqli_stmt_execute($sql_stmt)){
            echo "Delete Successfully";
            header("location:../index.php");
        }
    }

    public function editNote($id, $new_note){
        $query = "UPDATE `note` SET `note_value`=? WHERE `note_id`=?";
        $sql_stmt = mysqli_prepare($this->db->connect, $query);
        mysqli_stmt_bind_param($sql_stmt, "ss", $new_note, $id);

        if(mysqli_stmt_execute($sql_stmt)){
            echo "Edited Successfully";
            header("location:../index.php");
        }
    }





}


?>