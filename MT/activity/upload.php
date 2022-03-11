<?php
session_start();
require_once "../config.php";
if(isset($_POST['btnUpload'])){
    $id = 1;
	$query="SELECT MAX(id) AS idmax FROM tblupload";
    if($result = mysqli_query($link, $query)){
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				$max = $row['idmax'];
				$id = $max + 1;
			}
		}
	}
    if (is_uploaded_file($_FILES['browseFile']['tmp_name']) && $_FILES['browseFile']['error']==0) { 
        echo "The file name was: " . $_FILES['browseFile']['name'] . "<br>";
        echo "The file type is: " . $_FILES['browseFile']['type'] . "<br>";
        $file=$_FILES['browseFile'];
        $out = file_get_contents($file['tmp_name']);
        echo $out;
        }
    /*if (is_uploaded_file($_FILES['browseFile']['tmp_name'])) {
    $sql = "INSERT INTO tblupload VALUES (?, ?, ?,?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssbssss", $id, $name, $type, $data, $_SESSION['user'], $_POST['actid'], $time, $date);
            $name = $_FILES['browseFile']['name'];
            $type = $_FILES['browseFile']['type'];
            $data = file_get_contents($_FILES['browseFile']['tmp_name']);
            date_default_timezone_set('Asia/Singapore');
            $time = date("h:iA");
            $date = date('Y-m-d');
            if(mysqli_stmt_execute($stmt)){
                header('Location: view.php?id='.$_POST['actid']);
            }
            else{
                echo "asd";
                echo $id;
                echo $name;
                echo $_POST['actid'] ."hatdog";
                echo $_SESSION['user'];
                
            }
        }
        else{
            echo "error";
        }*/
    }
    else{
        echo "error upload";
    }

}
?>