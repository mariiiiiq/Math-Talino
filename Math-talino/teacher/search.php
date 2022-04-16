<?php
    session_start();
    require_once "../config.php";
    if(isset($_POST['search'])){
        $query = "SELECT * FROM tblaccounts where section = '".$_POST['sec']."' AND (name LIKE '%".$_POST['search']."%' OR username LIKE '%".$_POST['search']."%') order by name";
        if($results = mysqli_query($link, $query)){
            if(mysqli_num_rows($results) > 0){
                while($rows = mysqli_fetch_array($results)){
                    echo "<tr>
                    <td>{$rows['name']}</td>
                    <td>{$rows['username']}</td>
                    <td>{$rows['password']}</td></tr>";
                }
            }
            else{
                echo "<tr><td colspan='4' class='text-center'>No Data</td></tr>";
            }
            
        }
    }else{
        $query = "SELECT * FROM tblaccounts where section = '".$_POST['sec']."' order by name";
            if($results = mysqli_query($link, $query)){
              if(mysqli_num_rows($results) > 0){
                  while($rows = mysqli_fetch_array($results)){
                      echo "<tr>
                          <td>{$rows['name']}</td>
                          <td>{$rows['username']}</td>
                          <td>{$rows['password']}</td></tr>";
                  }
              }
            }
    }
?>