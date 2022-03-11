<?php
session_start();
require_once "config.php";
if(isset($_POST['btnAdd'])){
    $id = 1;
	$query="SELECT MAX(id) AS idmax FROM tblactivity";
    if($result = mysqli_query($link, $query)){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				$max = $row['idmax'];
				$id = $max + 1;
			}
		}
	}
    $sql = "INSERT INTO tblactivity VALUES (?, ?, ?, ?, ?)";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "sssss", $id, $_POST['txtactname'], $_SESSION['user'], $_POST['txtsecname'], $_POST['txtdesc']);
        if(mysqli_stmt_execute($stmt)){
            header('Location: teacher.php');
        }
        else{
        }
    }
}

?>