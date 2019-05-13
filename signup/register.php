<?php
     include_once("../config/config.php");
     $bdd = new db(); // create a new object, class db()
     $members = 'CREATE TABLE IF NOT EXISTS users (
       id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
       firstname VARCHAR(100) NOT NULL,
         role_id INT NOT NULL,
             password VARCHAR(100) NOT NULL,
             email VARCHAR(100) NOT NULL,
             lastname VARCHAR(100) DEFAULT "",
             phonenumber VARCHAR(100) NOT NULL,
             description VARCHAR(1000) DEFAULT "",
       date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ,
       date_modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
       )';
       try
        {
            $response = $bdd->execute($members);  
        } catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

        if(isset($_POST['phonenumber'])&&isset($_POST['firstname'])&&isset($_POST['lastname'])&&isset($_POST['email'])
			&&isset($_POST['password'])&&isset($_POST['description'])&&isset($_POST['submit']))
			{
				$phonenumber = $_POST['phonenumber'];
                $description = $_POST['description'];
                $firstname = $_POST['firstname'];
				$email = $_POST['email'];
				$lastname = $_POST['lastname'];
				$password = $_POST['password'];
				$role_id = 1;
				$query = "INSERT INTO users (firstname,description,password,email,lastname,phonenumber,role_id) VALUES ('$firstname','$description','$password','$email','$lastname','$phonenumber','$role_id')";
				try {	
					$response = $bdd->execute($query);	
                    if($response ==1)
                    {
                        $role_id = 1;
		
                        // //build query
                        $query = "SELECT * FROM users WHERE email='$email' AND password='$password' AND role_id='$role_id'";
                        //Execute query
                        $user = $bdd->getAll($query); // select ALL from allrecoards	
                        $count = count($user);
                                
                        if($count>=1){
                            if(session_id() == '' || !isset($_SESSION)){session_start();}
                            foreach($user as $value){
                                $id =$value['id'];
                            }
                            $_SESSION['username'] = $email;
                            $_SESSION['id'] = $id;

                            header('location:../admin');
                        
                        }else
                        {
                            header('location:index.php');
                        }
                    }
                        
                    } catch (Exception $e) {
                        echo"The error is : ",$e->getMessage();
                    }  
                }else{
                            echo("Fill All Fields");
                            header('location:index.php');
                }

?>