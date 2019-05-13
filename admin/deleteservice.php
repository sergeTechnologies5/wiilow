<?php

        include_once("../config/config.php");

        $bdd = new db(); // create a new object, class db()
       
        $id = $_GET['id'];
        $query = "DELETE FROM services WHERE id='$id'";
        $result = $bdd->execute($query);
        if($result==1){
            header("location:index.php");
           
        }else{
            header("location:/willow/admin/services.php");
        }

?>