<?php
    $k = "";
    require_once "../config.php";
	$query="SELECT * FROM tbltest WHERE lesson = 5.1 AND type='Post-test' AND student = '".$_POST['user']."' ";
        if($result = mysqli_query($link, $query)){
    		if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    echo $row['score'];
                }
				
			}
		}
?>