

<?php
    include_once("../config/config.php");
    $bdd = new db(); // create a new object, class db()

    if(isset($_POST['location'])&&isset($_POST['map_url'])&&isset($_POST['opening_hours'])&&isset($_POST['closing_hours'])&&isset($_FILES['log_url'])
    &&isset($_POST['terms_and_conditions'])&&isset($_POST['avg_response_time'])&&isset($_POST['avg_response_requests'])&&isset($_POST['avg_response_distance']))
    {
        session_start();
        $id = $_SESSION['id'];
        $location = $_POST['location'];
        $map_url = $_POST['map_url'];
        $log_url  = $_FILES['log_url']['name'];
        $opening_hours = $_POST['opening_hours'];
        $closing_hours = $_POST['closing_hours'];
        $avg_response_time = $_POST['avg_response_time'];
        $avg_response_requests = $_POST['avg_response_requests'];
        $avg_response_distance = $_POST['avg_response_distance'];
        $terms_and_conditions = $_POST['terms_and_conditions'];
        #
        $query = "UPDATE `settings` SET `map_url` = 'rr', `opening_hours` = 'rr', `closing_hours` = 'rr', `log_url` = 'rr', `avg_response_time` = '5', `avg_response_requests` = '5', `avg_response_distance` = '55', `terms_and_conditions` = '5' WHERE `settings`.`id` = 1;";
        $updatesettingsqcuery = "UPDATE `settings` SET `location` = '$location', `map_url` = '$map_url', `opening_hours` = '$opening_hours', `closing_hours` = '$closing_hours', `log_url` = '$log_url', `avg_response_time` = '$avg_response_time', `avg_response_requests` = '$avg_response_requests', `avg_response_distance` = '$avg_response_distance', `terms_and_conditions` = '$terms_and_conditions' WHERE `settings_id` = $id";
        $file_tmp =$_FILES['log_url']['tmp_name'];
        
        try {
            $updatesettingsresult = $bdd->execute($updatesettingsqcuery);
            move_uploaded_file($file_tmp,"../uploads/".$log_url );
            if($updatesettingsresult ==1){
                header('location:/willow/admin/setting.php');
            }else{
                header('location:index.php');
            }
        } catch (Exception $th) {
            echo $th->getMessage();
        }
       
       
     
    }else{
      echo ("ok");
    }//
    
    
    
?>