<?php
    require_once "config.php";
	$query="SELECT MAX(lesson) AS lessonmax FROM tbltest WHERE type='Post-test' AND student = '".$_POST['user']."'";
        if($result = mysqli_query($link, $query)){
    		if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
					$max = $row['lessonmax'];
				}
			}
		}
        echo $max;
?>