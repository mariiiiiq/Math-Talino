<?php
    session_start();
    $error ="";
	if(isset($_POST['login'])){
		require_once "config.php";
        $user = $_POST['username'];
	    $pass = $_POST['password'];
		echo $user;
			$sql = "SELECT * FROM tblaccounts WHERE username = '$user'";
			$result = mysqli_query($link, $sql);
			$rows = mysqli_fetch_array($result);	
			if($rows){
				echo $user;
				if($rows['password'] == $pass){
					echo $user;
					$_SESSION['user'] = $user;
					if($rows['usertype'] == "Admin"){
						
					}
                    else if($rows['usertype'] == "Student"){
						
                        
					}
					else if($rows['usertype'] == "Teacher"){
						
					}
				}
				else{
					$error = "Wrong password!";
				}
			}
			else{
				$error = "User not found";
			}
        echo $error;
	}
?>
