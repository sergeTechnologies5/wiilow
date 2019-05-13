<?php

        include_once("../config/config.php");

        require_once('../africanstalking/AfricasTalkingGateway.php');

        // Specify your authentication credentials
        $username   = "locationlocation";
        $apikey     = "ebd605ee02e2867bbe79ca72b7357603c95fb8e6f1029bed771edc40e7e4fcf8";

    // Specify the numbers that you want to send to in a comma-separated list
    // Please ensure you include the country code (+254 for Kenya in this case)


        $bdd = new db(); // create a new object, class db()
        //header('location:cancle.php');
        $id = $_GET['id'];
        $value = 0;
        $query = "UPDATE requests SET status='$value' WHERE id='$id'";

        try 
        { 
            $query = "SELECT phonenumber FROM requests WHERE id='$id'";
            $result = $bdd->getOne($query);
            $phonenumber = $result['phonenumber'];
            $recipients = "+".$phonenumber;

            // And of course we want our recipients to know what we really do
            $message    = "By Rescue App .."."\n Response From Our Team"."\n Request Declined Due to Avoidable Reasons";
            $gateway    = new AfricasTalkingGateway($username, $apikey);
            // Thats it, hit send and we'll take care of the rest. 
            $results = $gateway->sendMessage($recipients, $message);
                        
        }
        catch ( AfricasTalkingGatewayException $e )
        {
            echo "Encountered an error while sending: ".$e->getMessage();
        }
        $result = $bdd->execute($query);
        
        if($result>=1){
            header("location:/willow/admin/declinedrequests.php");
        }else{
            header("location:/willow/admin/declinedrequests.php");
        }

?>