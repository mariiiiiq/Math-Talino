<?php
    session_start();
    require_once "config.php";
    if(isset($_POST['btnAddAcc'])){
        $error=0;
        $sql = "SELECT * FROM tblaccounts WHERE username = ?";
	    if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $_POST['txtusername']);
		    if(mysqli_stmt_execute($stmt)){
			    $result = mysqli_stmt_get_result($stmt);
		    }
		    else{
			    echo "Error on select statement";
		    }
            if($error == 0 && mysqli_num_rows($result) != 1){
                $sql = "INSERT INTO tblaccounts VALUES (?, ?, ?, ?, ?)";
                if($_POST['cbUsertype']!="Student"){
                    $sec ="";
                }
                else{
                    $sec = $_POST['cbSection'];
                }
                if($stmt = mysqli_prepare($link, $sql)){
                    mysqli_stmt_bind_param($stmt, "sssss", $usr, $pss, $nm, $usrtp, $sec);
                    $usr = $_POST['username'];
                    $pss = $_POST['password'];
                    $nm = $_POST['name'];
                    $usrtp = $_POST['cbUsertype'];
                    if(mysqli_stmt_execute($stmt)){
                        header('Location: admin-account.php');
                    }
                    else{
                        echo "Error on inserting an account. Please try again later.";
                    }
                }   
            }
        }
    }
    if(isset($_POST['btnUpdateAcc'])){
        
        $edit = trim($_POST['eusername']);
		$sql = "UPDATE tblaccounts SET password = ?, name = ?, usertype = ?, section = ? WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
			mysqli_stmt_bind_param($stmt, "sssss", $_POST['epassword'], $_POST['ename'], $_POST['ecbUsertype'], $_POST['ecbSec'], $edit);
            if(mysqli_stmt_execute($stmt)){
                header('Location: admin-account.php');
            }
            else{
                echo "Error";
            }
        }
    }
    if(isset($_POST['btnDeleteAcc'])){
        $delete = trim($_POST['txtusername']);
        $sql = "DELETE FROM tblaccounts WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"s", $delete );
            if(mysqli_stmt_execute($stmt)){
                header('Location: admin-account.php');
            }
            else{
                echo "Error";
            }
        }
    }
    // Section
    if(isset($_POST['btnAddSec'])){
        $id = 1;
        $query="SELECT MAX(id) AS idmax FROM tblsection";
        if($result = mysqli_query($link, $query)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $max = $row['idmax'];
                    $id = $max + 1;
                }
            }
        }
        $sql = "INSERT INTO tblsection VALUES (?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sss", $id, $_POST['name'], $_POST['cbAdviser']);
            if(mysqli_stmt_execute($stmt)){
                header('Location: admin-section.php');
            }
            else{
                echo "Error on inserting an account. Please try again later.";
            }
        }
    }
    if(isset($_POST['btnUpdateSec'])){
        
        $edit = trim($_POST["eid"]);
		$sql = "UPDATE tblsection SET name = ?, adviser = ? WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
			mysqli_stmt_bind_param($stmt, "sss", $_POST['ename'], $_POST['ecbAdviser'], $edit);
            if(mysqli_stmt_execute($stmt)){
                header('Location: admin-section.php');
            }
            else{
                echo "Error";
            }
        }
    }
    if(isset($_POST['btnDeleteSec'])){
        $delete = trim($_POST['id']);
        $sql = "DELETE FROM tblsection WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt,"s", $delete );
            if(mysqli_stmt_execute($stmt)){
                header('Location: admin-section.php');
            }
            else{
                echo "Error";
            }
        }
    }
?>