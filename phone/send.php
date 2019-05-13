<?php

    include_once("../config/config.php");
    // Be sure to include the file you've just downloaded
    require_once('../africanstalking/AfricasTalkingGateway.php');

    // Specify your authentication credentials
    $username   = "locationlocation";
    $apikey     = "ebd605ee02e2867bbe79ca72b7357603c95fb8e6f1029bed771edc40e7e4fcf8";

    // Specify the numbers that you want to send to in a comma-separated list
    // Please ensure you include the country code (+254 for Kenya in this case)

            
    $bdd = new db(); // create a new object, class db()

    	

    if(isset($_POST['request_no'])&&isset($_POST['service_no'])&&isset($_POST['location'])&&isset($_POST['client_name'])&&isset($_POST['time'])&&isset($_POST['submit'])&&isset($_FILES['log_url'])&&isset($_POST['phonenumber']))
    {
        session_start();
        $log_url  = $_FILES['log_url']['name'];
        $file_tmp =$_FILES['log_url']['tmp_name'];
        $request_no = $_POST['request_no'];
        $location = $_POST['location'];
        $phonenumber = $_POST['phonenumber'];
        $client_name = $_POST['client_name'];
        $time = $_POST['time'];
        $service_no = $_POST['service_no'];
        $client_id = $_POST['client_id'];
        echo $client_id.$service_no;
        // $organisation_id = $_POST['organisation_id '];
        $status = 0;
        $query = "INSERT INTO `requests` (`id`,`phonenumber`,`log_url`, `request_no`, `service_no`, `time`, `status`, `client_name`, `location`, `organisation_id`, `client_id`, `date_created`, `date_modified`) VALUES (NULL, '$phonenumber', '$log_url', '$request_no', '$service_no', '$time', '$status', '$client_name', '$location', '$client_id', '$client_id', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);";
    
        try {
            
            $response = $bdd->execute($query);	
            move_uploaded_file($file_tmp,"../useruploads/".$log_url );
            try 
            { 
            $recipients = "+".$phonenumber;

            // And of course we want our recipients to know what we really do
            $message    = "By Rescue App .."."\n Wait for Response From Our Team"."\n Request Sent";
            $gateway    = new AfricasTalkingGateway($username, $apikey);
            // Thats it, hit send and we'll take care of the rest. 
            $results = $gateway->sendMessage($recipients, $message);
                        
            }
            catch ( AfricasTalkingGatewayException $e )
            {
            echo "Encountered an error while sending: ".$e->getMessage();
            }
            if($response ==1){
                header('location:index.php');
            }else{
                header('location:seekservice.php');
            }
        } catch (Exception $e) {
            echo"The error is : ",$e->getMessage();
        }  
    }else{
        echo("Fill All Fields");
    }

?>