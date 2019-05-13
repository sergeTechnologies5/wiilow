<?php

    include_once("../config/config.php");
            
    $bdd = new db(); // create a new object, class db()

    	

    if(isset($_POST['request_no'])&&isset($_POST['service_no'])&&isset($_POST['location'])&&isset($_POST['client_name'])&&isset($_POST['time'])&&isset($_POST['submit']))
    {
        session_start();
        $request_no = $_POST['request_no'];
        $location = $_POST['location'];
        $client_name = $_POST['client_name'];
        $time = $_POST['time'];
        $service_no = $_POST['service_no'];
        $c = $_POST['request_no'];
        $client_id = $_SESSION['id'];
        $organisation_id = $_SESSION['id'];
        $status = 0;
        
        $query = "INSERT INTO `requests` (`id`, `request_no`, `service_no`, `time`, `status`, `client_name`, `location`, `organisation_id`, `client_id`, `date_created`, `date_modified`) VALUES (NULL, '$request_no', '$service_no', '$time', '$status', '$client_name', '$location', '$organisation_id', '$client_id', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
    
        try {
            
            $response = $bdd->execute($query);	
            if($response ==1){
                header('location:/willow/admin/requests.php');	
            }else{
                header('location:/willow/admin/requests.php');
            }
        } catch (Exception $e) {
            echo"The error is : ",$e->getMessage();
        }  
    }else{
        echo("Fill All Fields");
    }

?>