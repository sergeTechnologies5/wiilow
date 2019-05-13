<?php

        include_once("../config/config.php");
		$bdd = new db();
		$data = file_get_contents('php://input');
		$json_data = json_decode($data , true);

		$request_no = $json_data ['request_no'];
        $location = $json_data ['location'];
        $client_name = $json_data ['client_name'];
        $time = $json_data ['time'];
        $service_no = $json_data ['service_no'];
        $c = $json_data ['request_no'];
        $client_id = $json_data['id'];
        $organisation_id = $json_data['service_id'];
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
		

?>