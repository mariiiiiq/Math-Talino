<?php
    session_start();
    require_once "../config.php";
    if(isset($_POST['search'])){
        if($_POST['search']==="filter"){
            $sql = "SELECT tblaccounts.name, tbltest.lesson, tbltest.type, tbltest.score, tbltest.datetaken FROM tblaccounts, tbltest WHERE tblaccounts.username = student AND tblaccounts.section = '".$_POST['sec']."' AND tbltest.type='".$_POST['type']."' ORDER BY tblaccounts.username";
            if($result = mysqli_query($link, $sql)){
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['lesson']}</td>
                        <td>{$row['type']}</td>
                        <td>{$row['score']}</td>
                        <td>{$row['datetaken']}</td></tr>";
                    }
                }
                else{
                    echo "<tr><td colspan='5 ' class='text-center'>No Data</td></tr>";
                }   
            }
        }
        else{
            if($_POST['type']=="name"){
                $sql = "SELECT tblaccounts.name, tbltest.lesson, tbltest.type, tbltest.score, tbltest.datetaken FROM tblaccounts, tbltest WHERE tblaccounts.username = student AND tblaccounts.section = '".$_POST['sec']."' AND tblaccounts.name LIKE '%".$_POST['search']."%'  ORDER BY tblaccounts.username";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>
                            <td>{$row['name']}</td>
                            <td>{$row['lesson']}</td>
                            <td>{$row['type']}</td>
                            <td>{$row['score']}</td>
                            <td>{$row['datetaken']}</td></tr>";
                        }
                    }   
                    else{
                        echo "<tr><td colspan='5' class='text-center'>No Data</td></tr>";
                    }
                }
            }
            else if($_POST['type']=="lesson"){
                $sql = "SELECT tblaccounts.name, tbltest.lesson, tbltest.type, tbltest.score, tbltest.datetaken FROM tblaccounts, tbltest WHERE tblaccounts.username = student AND tblaccounts.section = '".$_POST['sec']."' AND tbltest.lesson LIKE '%".$_POST['search']."%'  ORDER BY tblaccounts.username";
                if($result = mysqli_query($link, $sql)){
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>
                            <td>{$row['name']}</td>
                            <td>{$row['lesson']}</td>
                            <td>{$row['type']}</td>
                            <td>{$row['score']}</td>
                            <td>{$row['datetaken']}</td></tr>";
                        }
                    }   
                    else{
                        echo "<tr><td colspan='5' class='text-center'>No Data</td></tr>";
                    }
                }
            }
            
        }
        
    }else{
        $query = "SELECT tblaccounts.name, tbltest.lesson, tbltest.type, tbltest.score, tbltest.datetaken FROM tblaccounts, tbltest WHERE tblaccounts.username = student AND tblaccounts.section = '".$_POST['sec']."' ORDER BY tblaccounts.username";
            if($results = mysqli_query($link, $query)){
              if(mysqli_num_rows($results) > 0){
                  while($rows = mysqli_fetch_array($results)){
                    echo "<tr>
                    <td>{$rows['name']}</td>
                    <td>{$rows['lesson']}</td>
                    <td>{$rows['type']}</td>
                    <td>{$rows['score']}</td>
                    <td>{$rows['datetaken']}</td></tr>";
                }
              }
              else{
                echo "<tr><td colspan='4' class='text-center'>No Data</td></tr>";
                }
            }
    }
?>