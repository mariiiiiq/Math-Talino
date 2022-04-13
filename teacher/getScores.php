<html>
  <?php
    session_start();
    require_once "../config.php";
    $secs = array(); 
    $r = 0;
    $sql = "SELECT * FROM tblsection where adviser = '".$_SESSION['user']."'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
              array_push($secs, $row['name']);
              $r++;
            }
        }   
    }
    ?>
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <?php
    for($i=0;$i<$r;$i++){
      if($i==0){
        echo "<button class='nav-link active' id='".$secs[$i]."' data-bs-toggle='tab' data-bs-target='#".$secs[$i]."-tab' type='button' role='tab' aria-controls='nav-".$secs[$i]."' aria-selected='true'>".$secs[$i]."</button>";
      }
      else{
        echo "<button class='nav-link' id='".$secs[$i]."' data-bs-toggle='tab' data-bs-target='#".$secs[$i]."-tab' type='button' role='tab' aria-controls='nav-".$secs[$i]."' aria-selected='false'>".$secs[$i]."</button>";
      }
      
    }?>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
  <?php
    for($j=0;$j<$r;$j++){
      if($j==0){
        echo "<div class='tab-pane fade show active' id='nav-".$secs[$j]."' role='tabpanel' aria-labelledby='nav-".$secs[$j]."-tab'>";
      }
      else{
        echo "<div class='tab-pane fade' id='nav-".$secs[$j]."' role='tabpanel' aria-labelledby='nav-".$secs[$j]."-tab'>";
      }
      ?>
      <br>
      <button type="button" class="btn-close me-3" style="float:right;display:none" aria-label="Close"></button>
      <!-- Name -->
      <div class="me-1" id="name" style="width:200px;float:right;display:none">
        <input type="text" class="form-control" name="searchname" id="searchname" placeholder="Name">
      </div>
      <!-- Lesson -->
      <div class="me-1" id="lesson" style="width:200px;float:right;display:none">
        <input type="text" class="form-control" name="searchlesson" id="searchlesson" placeholder="Lesson(Number)">
      </div>
      <!-- Assessment Type -->
      <div class="dropdown me-1" id="type" style="float:right;display:none">
        <select class="form-select" id="cbtype" aria-label="Default select example">
          <option selected hidden>Type</option>
          <option value="Pre-test">Pre-test</option>
          <option value="Post-test">Post-test</option>
          <option value="Activity">Activity</option>
        </select>
      </div>
      <div class="dropdown me-2" style="float:right">
        <select class="form-select primary" id="filter" aria-label="Default select example">
          <option selected hidden>Filter</option>
          <option value="name">Name</option>
          <option value="lesson">Lesson</option>
          <option value="type">Type</option>
        </select>
    </div><br>
      <div class="table-responsive table-wrapper m-3">
        <table class="table text-center">
          <thead class="table-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Lesson</th>
              <th scope="col">Assessment Type</th>
              <th scope="col">Score</th>
              <th scope="col">Date Taken</th>
            </tr>
          </thead>
          <tbody class="result">
          </tbody>
         </table>
      </div>
      <?php
      echo "</div>";
      echo "<script src='filter.js'></script>";
    }
  ?>
  </div>
</html>
