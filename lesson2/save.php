<?php
session_start();
require_once "../config.php";
$data = null;
if($_POST['type']=="pretest"){
    if($_POST['act']=="get"){
        $id= "pre2-".$_SESSION['user'];
        $sql = "SELECT * FROM tbltest where id = '".$id."' and student='".$_SESSION['user']."'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $data = "<b>Score: " . $row['score'] . "<br>Date taken: <br>&nbsp;&nbsp;" . $row['datetaken'].'</b>';
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
    }
    else if($_POST['act']=="save"){
        $type = "pretest";
        $id = "pre2-".$_SESSION['user'] ;
        $sql = "INSERT INTO tbltest VALUES (?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $id, $_SESSION['user'], $type, $_POST['score'],  $d);
            $d = date("M d, Y");
            if(mysqli_stmt_execute($stmt)){
                echo "</b>Score: " . $_POST['score'];
                echo "<br>Date taken: <br>&nbsp;&nbsp;" . $d .'</b>';
            }
            else{
                echo "Error";
            }
        }
    }
    
}
if($_POST['type']=="posttest"){
    if($_POST['act']=="get"){
        $id= "post2-".$_SESSION['user'];
        $sql = "SELECT * FROM tbltest where id = '".$id."' and student='".$_SESSION['user']."'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $data = "<b>Score: " . $row['score'] . "<br>Date taken: <br>&nbsp;&nbsp;" . $row['datetaken'].'</b>';
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
    }
    else if($_POST['act']=="save"){
        $type = "posttest";
        $id = "post2-".$_SESSION['user'] ;
        $sql = "INSERT INTO tbltest VALUES (?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $id, $_SESSION['user'], $type, $_POST['score'],  $d);
            $d = date("M d, Y");
            if(mysqli_stmt_execute($stmt)){
                echo "</b>Score: " . $_POST['score'];
                echo "<br>Date taken: <br>&nbsp;&nbsp;" . $d .'</b>';
            }
            else{
                echo "Error";
            }
        }
    }
}
if($_POST['type']=="activity"){
    if($_POST['act']=="get"){
        $id= "act2-".$_SESSION['user'];
        $sql = "SELECT * FROM tbltest where id = '".$id."' and student='".$_SESSION['user']."'";
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $data = "<b>Score: " . $row['score'] . "<br>Date taken: <br>&nbsp;&nbsp;" . $row['datetaken'].'</b>';
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
    }
    else if($_POST['act']=="save"){
        $type = "activity";
        $id = "act2-".$_SESSION['user'] ;
        $sql = "INSERT INTO tbltest VALUES (?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "sssss", $id, $_SESSION['user'], $type, $_POST['score'],  $d);
            $d = date("M d, Y");
            if(mysqli_stmt_execute($stmt)){
                echo "</b>Score: " . $_POST['score'];
                echo "<br>Date taken: <br>&nbsp;&nbsp;" . $d .'</b>';
            }
            else{
                echo "Error";
            }
        }
    }
    
}
?>