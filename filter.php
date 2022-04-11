<?php
    session_start();
    require_once "config.php";
    $secs = array(); 
    $r = 0;
    $sql = "SELECT tblaccounts.name, tbltest.type, tbltest.score, tbltest.datetaken FROM tblaccounts, tbltest WHERE tblaccounts.username = student AND tblaccounts.section = '".$_POST['sec']."' AND tbltest.type='".$_POST['type']."' ORDER BY tblaccounts.username";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['type']}</td>
                <td>{$row['score']}</td>
                <td>{$row['datetaken']}</td></tr>";
          
              
            }
        }   
    }
?>