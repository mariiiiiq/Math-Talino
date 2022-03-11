<?php
session_start();
require_once "../config.php";
$data = null;
    $id= "pre1-".$_SESSION['user'];
    $sql = "SELECT * FROM tblpretest where id = '".$id."' and student='".$_SESSION['user']."'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $data = "Score: " . $row['score'] . "<br>Date taken: " . $row['datetaken'];
            }
        }
        else{
            $data="";
        }
    }
    else{
        $data =  "error";
    }
    echo $data;
if(isset($_POST['score'])){
    $id = "pre1-".$_SESSION['user'] ;
    $sql = "INSERT INTO tblpretest VALUES (?, ?, ?, ?)";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "ssss", $id, $_SESSION['user'], $_POST['score'],  $d);
        $d = date("Y-m-d");
        if(mysqli_stmt_execute($stmt)){
            echo "Score: " . $_POST['score'];
            echo "<br>Date taken: " . $d;
        }
        else{
            echo "Error";
        }
    }
}

?>