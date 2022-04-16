<html>
    <?php
        session_start();
        require_once "config.php";
        if(isset($_POST['usertype'])){
            $sql = "SELECT * FROM tblaccounts where usertype='".$_POST['usertype']."' order by username";
        }
        else{
            $sql = "SELECT * FROM tblaccounts where usertype!='Admin' order by username";
        }
        if(isset($_POST['search'])){
            $sql = "SELECT * FROM tblaccounts where usertype!='Admin' AND username LIKE '%".$_POST['search']."%' OR name LIKE '%".$_POST['search']."%' OR section LIKE '%".$_POST['search']."%' order by username";
        }
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                    $username = $row['username'];
                    $mask_number =  str_repeat("*", strlen($row['password']));
                    echo "<tr>
                        <td class='pt-3'>$username</td>
                        <td class='pt-3'>{$mask_number}</td>
                        <td class='pt-3'>{$row['name']}</td>
                        <td class='pt-3'>{$row['section']}</td>
                        <td class='pt-3'>{$row['usertype']}</td>
                        <td>
                        <a href='#update".$username."' class='btn btns primary' data-bs-toggle='modal'>Update</a>
                        <a href='#delete".$username."' class='btn btns btn-danger' data-bs-toggle='modal'>Delete</a>";
                        ?>
                        <!-- Update Account Modal -->
                        <div class="modal fade" id="update<?php echo $username; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" style="border:none;padding-bottom:0px;">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="addacc">
                                            <form method="post" class="frm" action="adminProcess.php">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="eusername" name="eusername" placeholder="Username" value="<?php echo $row['username']; ?>" disabled autocomplete="off">
                                                    <label for="eusername">Username</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="epassword" name="epassword" placeholder="password" value="<?php echo $row['password']; ?>" autocomplete="off">
                                                    <label for="epassword">Password</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="ename" name="ename" placeholder="name" value="<?php echo $row['name']; ?>" autocomplete="off">
                                                    <label for="ename">Name</label>
                                                </div>
                                                <div class="form-floating mb-3" id="eusertype">
                                                    <select class="form-select" id="ecbUsertype" name="ecbUsertype" aria-label="Floating label select example">
                                                    <option value="<?php echo $row['usertype']; ?>" hidden><?php echo $row['usertype']; ?><option>
                                                    <option value="Teacher">Teacher</option>
                                                    <option value="Student">Student</option>
                                                    </select>
                                                    <label for="ecbUsertype">Usertype</label>
                                                </div>
                                                <?php
                                                if($row['usertype']=="Student"){?>
                                                <div class="form-floating mb-3" id="esection">
                                                    <select class="form-select" id="ecbSection" name="ecbSection" aria-label="Floating label select example">
                                                    <?php
                                                        require_once "config.php";
                                                        $query = "SELECT * FROM tblsection order by name";
                                                        $r = mysqli_query($link, $query);	
                                                        while($rows = mysqli_fetch_array($r)){
                                                        $_SERVER['sec'] = $rows['name'];
                                                        $sec = $_SERVER['sec'];
                                                        echo "<option value='$sec'>$sec</option>";
                                                        }?>
                                                    </select>
                                                    <label for="ecbUsertype">Section</label>
                                                </div><?php
                                                }
                                                ?>
                                                <div class="d-flex justify-content-center">
                                                    <div class="button">
                                                        <button class="btn btns secondary" type="button" name="btnclear" onclick="ClearFields();">Clear</button>
                                                        <button class="btn btns primary" type="submit" name="btnUpdateAcc" id="btnUpdateAcc">Save</button>
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
                                                <input type="text" id="txtusername" name="txtusername" value="<?php echo $username; ?>" hidden>
                                                <h6>Are you sure you want to delete this account?</h6>
                                                <div class="d-flex justify-content-center">
                                                    <div class="button">
                                                        <button class="btn btns secondary" type="button" data-dismiss="modal" name="btnclear">No</button>
                                                        <button class="btn btns btn-danger" type="submit" name="btnDeleteAcc" id="btnAddAcc">Yes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    </tr>
                <?php
        
                }
            }
            else{
                echo "<tr><td></td><td></td><td colspan='2'>No result</td><td></td><td></td></tr>";
            }
        }
    ?>
</html>
