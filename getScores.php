<html>
  <?php
    session_start();
    require_once "config.php";
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
        echo "<button class='nav-link active' id='nav-".$secs[$i]."-tab' data-bs-toggle='tab' data-bs-target='#".$secs[$i]."' type='button' role='tab' aria-controls='nav-".$secs[$i]."' aria-selected='false'>".$secs[$i]."</button>";
      }
      else{
        echo "<button class='nav-link' id='nav-".$secs[$i]."-tab' data-bs-toggle='tab' data-bs-target='#".$secs[$i]."' type='button' role='tab' aria-controls='nav-".$secs[$i]."' aria-selected='false'>".$secs[$i]."</button>";
      }
      
    }?>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
  <?php
    for($j=0;$j<$r;$j++){
      if($j==0){
        echo "<div class='tab-pane fade show active' id='".$secs[$j]."' role='tabpanel' aria-labelledby='nav-".$secs[$j]."-tab'>";
      }
      else{
        echo "<div class='tab-pane fade' id='".$secs[$j]."' role='tabpanel' aria-labelledby='nav-".$secs[$j]."-tab'>";
      }
      ?>
      <br>
      <!-- Assessment Type -->
      <div class="dropdown me-3" id="type" style="float:right;display:none">
        <select class="form-select" id="cbtype" aria-label="Default select example">
          <option selected hidden>Assessment Type</option>
          <option value="Pre-test">Pre-test</option>
          <option value="Post-test">Post-test</option>
          <option value="Activity">Activity</option>
        </select>
      </div>
      <div class="dropdown me-3" style="float:right">
        <select class="form-select" id="filter" aria-label="Default select example">
          <option selected hidden>Filter</option>
          <option value="name">Name</option>
          <option value="type">Type</option>
        </select>
    </div>
      <br>
      <div class="table-responsive table-wrapper m-3">
        <table class="table text-center">
          <thead class="table-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Assessment Type</th>
              <th scope="col">Score</th>
              <th scope="col">Date Taken</th>
            </tr>
          </thead>
          <tbody class="result">
          <?php
            $query = "SELECT * FROM tblaccounts where section = '".$secs[$j]."' order by name";
            if($results = mysqli_query($link, $query)){
              if(mysqli_num_rows($results) > 0){
                  while($rows = mysqli_fetch_array($results)){
                    $q = "SELECT tblaccounts.name, tbltest.type, tbltest.score, tbltest.datetaken FROM tblaccounts, tbltest WHERE tblaccounts.username = student AND tblaccounts.section = '".$secs[$j]."' ORDER BY tblaccounts.username";
                    if($rslts = mysqli_query($link, $q)){
                      if(mysqli_num_rows($rslts) > 0){
                          while($rws = mysqli_fetch_array($rslts)){
                            echo "<tr>
                                <td>{$rws['name']}</td>
                                <td>{$rws['type']}</td>
                                <td>{$rws['score']}</td>
                                <td>{$rws['datetaken']}</td></tr>";
                          }
                      }
                    }
                  }
              }
            }
          ?>
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