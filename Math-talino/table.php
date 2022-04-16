<html lang="en">
<body>
<?php
require_once "config.php";
    if($_POST['table']=="section"){
    $sql = "SELECT * FROM tblsection order by name";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $username = $row['id'];
                echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['adviser']}</td>
                    <td>
                    <a href='#update".$username."' class='btn btns primary' data-bs-toggle='modal'>Update</a>
                    <a href='#delete".$username."' class='btn btns btn-danger' data-bs-toggle='modal'>Delete</a>";
                    ?>
                    <!-- Update -->
                    <div class="modal fade" id="update<?php echo $username; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="border:none;padding-bottom:0px;">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="addacc">
                                    <form method="post" class="frm" action="adminProcess.php">
                                        <input value="<?php echo $username; ?>" id="eid" name="eid" hidden/>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="ename" name="ename" placeholder="name" value="<?php echo $row['name']; ?>" autocomplete="off">
                                            <label for="ename">Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                        <select class="form-select" id="cbAdviser" name="ecbAdviser" aria-label="Floating label select example">
                                        <option value="<?php echo $row['adviser']; ?>"hidden><?php echo $row['adviser']; ?></option>
                                        <?php
                                            require_once "config.php";
                                            $query = "SELECT * FROM tblaccounts where usertype='Teacher' order by username";
                                            $r = mysqli_query($link, $query);	
                                            while($rows = mysqli_fetch_array($r)){
                                            $adviser = $rows['username'];
                                            echo "<option value='$adviser'>$adviser</option>";
                                            }?>
                                        </select>
                                        <label for="cbUsertype">Adviser</label>
                                    </div>
                                        <div class="d-flex justify-content-center">
                                            <div class="button">
                                                <button class="btn btns secondary" type="button" name="btnclear" onclick="ClearFields();">Clear</button>
                                                <button class="btn btns primary" type="submit" name="btnUpdateSec" id="btnUpdateSec">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Delete Account Modal -->
                        <div class="modal fade" id="delete<?php echo $username; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="border:none;padding-bottom:0px;">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="addacc">
                                            <form method="post" class="frm" action="adminProcess.php">
                                                <input type="text" id="id" name="id" value="<?php echo $username; ?>" hidden>
                                                <h6>Are you sure you want to delete this section?</h6>
                                                <div class="d-flex justify-content-center">
                                                    <div class="button">
                                                        <button class="btn btns secondary" type="button" data-dismiss="modal" name="btnclear">No</button>
                                                        <button class="btn btns btn-danger" type="submit" name="btnDeleteSec" id="btnAddSec">Yes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <?php
            }
        }
    }

}
?>
  </body>
  
</html>