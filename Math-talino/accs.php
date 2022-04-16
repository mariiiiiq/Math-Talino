<html>
    <?php
        session_start();
        require_once "config.php";
        ?>
        <div class="m-0">
            <a href='#' class='btn btns primary my-1 btnadd' style="floar:right;" data-bs-toggle='modal' data-bs-target='#addAccount'>Add</a>
            <button type="button" class="btn-close me-3" style="float:right;display:none" data-bs-dismiss="modal" aria-label="Close"></button>
     
            <div class="me-1" id="searchdiv" style="width:200px;float:right;display:none">
                <input type="text" class="form-control" name="search" id="search" placeholder="Search">
            </div>
        
                <!-- Assessment Type -->
            <div class="dropdown me-1" id="type" style="float:right;display:none">
                <select class="form-select" id="cbtype" aria-label="Default select example">
                <option selected hidden>Usertype</option>
                <option value="Teacher">Teacher</option>
                <option value="Student">Student</option>
                </select>
            </div>
            <div class="dropdown me-2" style="float:right;display:inlin-block">
                <select class="form-select" id="filter" aria-label="Default select example">
                <option selected hidden>Filter</option>
                <option value="name">Search</option>
                <option value="usertype">Usertype</option>
                </select>
            </div>
        </div>
        <div class="table-responsive table-wrapper mx-3">
            <table class="table text-center">
            <thead class="table-dark">
                <tr>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Name</th>
                <th scope="col">Section</th>
                <th scope="col">Usertype</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="result">
            </tbody>
            </table>
        </div><?php
        echo "<script src='fill.js'></script>";
    ?>
</html>