<?php
    session_start();
    $error ="";
	if(isset($_POST['login'])){
		require_once "config.php";
        $user = $_POST['username'];
	    $pass = $_POST['password'];
			$sql = "SELECT * FROM tblaccounts WHERE username = '$user'";
			$result = mysqli_query($link, $sql);
			$rows = mysqli_fetch_array($result);	
			if($rows){
				if($rows['password'] == $pass){
					$_SESSION['user'] = $user;
					$_SESSION['name'] = $rows['name'];
					if($rows['usertype'] == "Admin"){
						echo '<script>location.href="admin-account.php";</script>';
					}
                    else if($rows['usertype'] == "Student"){
						echo '<script>location.href="student.php";</script>';
                        
					}
					else if($rows['usertype'] == "Teacher"){
						echo '<script>location.href="teacher.php";</script>';
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
