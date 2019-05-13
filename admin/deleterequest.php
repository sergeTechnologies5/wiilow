<?php

        include_once("../config/config.php");

        $bdd = new db(); // create a new object, class db()
       
        $id = $_GET['id'];
        $query = "DELETE FROM requests WHERE id='$id'";
        $result = $bdd->execute($query);
        if($result==1){
            header("location:/willow/admin/index.php");
           
        }else{
            header("location:/willow/admin/index.php");
        }

?>