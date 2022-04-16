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
      <div class="me-3" id="searchdiv" style="width:200px;float:right;">
        <input type="text" class="form-control" name="search" id="search" placeholder="Name">
      </div><br>
      <div class="table-responsive table-wrapper m-3">
        <table class="table text-center">
          <thead class="table-dark">
            <tr>
              <th scope="col">Name</th>
              <th scope="col">Username</th>
              <th scope="col">Password</th>
            </tr>
          </thead>
          <tbody class="result">
          </tbody>
         </table>
      </div>
      <?php
      echo "</div>";
      echo "<script src='search.js'></script>";
    }
  ?>
  </div>
</html>
