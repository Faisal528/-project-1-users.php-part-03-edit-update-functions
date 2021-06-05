<?php

include "connection.php";

// delete function

function delete($table, $p_key, $url, $d_id){

		global $db;

	     $sql = "DELETE FROM $table WHERE $p_key='$d_id'";
         $delete_res = mysqli_query($db,$sql);

                                            
         if($delete_res){
        header('Location: '.$url.'');
         }else{
           die('Delete Error!'.error($db));
      }

    }

?>