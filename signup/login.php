<?php
    if(isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['login']))
	{
        include_once("../config/config.php");
        $bdd = new db();
		$email = $_POST['email'];
		$password = $_POST['password'];

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
?>
	
