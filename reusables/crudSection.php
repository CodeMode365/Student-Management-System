<?php
// session_start();
if (!$_SESSION['status'] == 1) {
    $buttonStatus = 'disabled';
} else {
    $buttonStatus = '';
}
?>
<div class="crud">
    <header style="width: 100%;" class="d-flex justify-content-center align-items-center">
        <!-- <h2 class="d-flex justify-content-center">Student Details</h2>Beta<br> -->
        <hr>
        <!-- <input id="search" onkeydown="search(this.value)" style="position: relative; left:50px;" type="search" class="ps-5 ms-5" placeholder="search..."> -->
    </header>


    <!-- Model pop up button -->
    <div class="container mt-3 d-flex mt-5 justify-content-between container">
        <button type="button" class="btn btn-success <?php echo $buttonStatus; ?>" data-bs-toggle="modal" data-bs-target="#myModal">
            Add new Data
        </button>
        <input id="search" onkeydown="search(this.value)" style="position: relative; right:40px; " type="search" class="ps-5 ms-5 rounded-3" placeholder="search...">
    </div>



    <!-- table -->
    <div class="container mt-3">
        <h2>Students Details</h2>
        <table id="table" class=" table table-dark  table-hover table-bordered table-striped  ">
            <thead>
                <tr class="text-center">
                    <th>Id</th>
                    <th>Name</th>
                    <th>Faculty</th>
                    <th>Semister</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>More Info</th>
                </tr>
            </thead>

            <?php
            //connectiong database
            require("../phpLogs/config.php");
            require("../phpLogs/operation.php");

            //Fetching data from database
            $query = "SELECT * from studentinfo";
            $queryRun = mysqli_query($conn, $query);

            while ($result = mysqli_fetch_array($queryRun)) {

            ?>
                <tbody class="text-dark text-center">
                    <tr>
                        <td><?php echo $result['S_id']; ?></td>
                        <td><?php echo $result['S_name']; ?></td>
                        <td><?php echo $result['S_faculty']; ?></td>
                        <td><?php echo $result['Semester']; ?></td>

                        <!-- Delete the data  -->

                        <td>
                            <button type="button" class="btn btn-primary <?php echo $buttonStatus; ?>" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $result["S_id"] ?>">Update</a> </button>
                            <!-- The Modal  mode infomation -->
                            <div class="modal fade  text-dark" id="updateModal<?php echo $result["S_id"] ?>">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">
                                                Student id: <?php echo $result['S_id']; ?></h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <?php
                                            $current = $result["S_id"];
                                            $sqlcurr = "SELECT * FROM `studentinfo` WHERE S_id=$current;";
                                            $execute = mysqli_query($conn, $sqlcurr);

                                            $data = mysqli_fetch_assoc($execute);
                                            ?>
                                            <form action="" method="POST">
                                                <table class="table px-3 updater">
                                                    <tr>
                                                        <input type="text" name="id" value="<?php echo $data["S_id"]; ?>" style="display:none;">
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe for="name">Name:</labe>
                                                        </th>
                                                        <td><input type="text" name="name" value="<?php echo $data["S_name"]; ?>"></td>
                                                    </tr>


                                                    <div class=" ">
                                                        <tr>
                                                            <th><label for="year" class="form-label mx-4">Year:</label></th>
                                                            <td><select name="year" id="year" class="form-select mx-4" aria-label="Default select example" required>
                                                                    <option selected value="1">I</option>
                                                                    <option value="2">II</option>
                                                                    <option value="3">III</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th><label for="part" class="form-label mx-4">Part:</label></th>
                                                            <td><select name="part" id="part" class="form-select  mx-4" aria-label="Default select example" required>
                                                                    <option selected value="1">I</option>
                                                                    <option value="2">II</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                    </div>
                                                    <tr>
                                                        <div class="form-check mx-0 d-flex justify-content-around">
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input faculty" name="faculty" id="faculty" value="DCOM" checked>
                                                                DCOM
                                                            </label>
                                                            <label class="form-check-label ">
                                                                <input type="radio" class="form-check-input faculty" name="faculty" id="architecudive" value="Architecture">
                                                                Architecture
                                                            </label> <label class="form-check-label">
                                                                <input type="radio" class="form-check-input faculty" name="faculty" id="civil" value="Civil">
                                                                Civil
                                                            </label>
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input faculty" name="faculty" id="E&E" value="E&E">
                                                                E&E
                                                            </label>
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input faculty" name="faculty" id="Electrical" value="Electrical">
                                                                Electrical
                                                            </label>
                                                    </tr>
                                                    <tr class="">
                                                        <th>Gender:</th>
                                                        <td>
                                                            <label class="form-check-label ms-4">
                                                                <input type="radio" class="form-check-input gender" name="gender" id="gender" value="Male">
                                                                Male
                                                            </label>
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input gender" name="gender" id="gender" value="Female">
                                                                Female
                                                            </label>
                                                            <label class="form-check-label">
                                                                <input type="radio" class="form-check-input gender" name="gender" id="gender" value="Others" checked>
                                                                Others
                                                            </label>
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>Roll no:</th>
                                                        <td><input type="text" name="roll" value="<?php echo $data["Roll"]; ?>"></td>

                                                    </tr>
                                                    <tr class="">
                                                        <th><label>Phone:</label></th>
                                                        <td><input type="text" name="phone" value="<?php echo $data["S_phone"]; ?>"></td>

                                                    </tr>
                                                    <tr class="mb-3 mt-3">
                                                        <th>
                                                            </<label for="address" class="form-label">Address:</label></th>
                                                        <td><input type="text" class="form-control" id="address" value="<?php echo $data['C_address']; ?>" name="address">
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <th><label for="email">Email</label></th>
                                                        <td><input type="text" name="email" value="<?php echo $data["S_email"]; ?>"></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th><label for="G_name">Guardian's Name:</label></th>
                                                        <td><input type="text" name="G_name" value="<?php echo $data["G_name"]; ?>"></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>Guardian's number:</th>
                                                        <td><input type="text" name="G_phone" value=<?php echo $data["G_phone"]; ?>"></td>
                                                    </tr>
                                                </table>
                                                <button type="submit" class="btn btn-info text-light" name="update">Update</button>
                                            </form>

                                        </div>



                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>


                        <td>
                            <button class="btn btn-danger <?php echo $buttonStatus; ?>"><a class="text-white text-decoration-none" href="../logics/delete.php?id=<?php echo $result['S_id']; ?>">Delete</a> </button>
                        </td>



                        <td>
                            <button type="button" class="btn btn-info <?php echo $buttonStatus; ?>" data-bs-toggle="modal" data-bs-target="#infoModal<?php echo $result["S_id"] ?>">Update</a> </button>
                            <!-- The Modal  mode infomation -->
                            <div class="modal fade  text-dark" id="infoModal<?php echo $result["S_id"] ?>">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">
                                                Student id: <?php echo $result['S_id']; ?></h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <?php
                                            $current = $result["S_id"];
                                            $sqlcurr = "SELECT * FROM `studentinfo` WHERE S_id=$current;";
                                            $execute = mysqli_query($conn, $sqlcurr);

                                            $data = mysqli_fetch_assoc($execute);
                                            ?>
                                                <table class="table px-3 updater">
                                                    <tr>
                                                        <input type="text" name="id" value="<?php echo $data["S_id"]; ?>" style="display:none;">
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >Name:</labe>
                                                        </th>
                                                        <td><?php echo $data["S_name"]; ?></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >Gender:</labe>
                                                        </th>
                                                        <td><?php echo $data["Gender"]; ?></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >Faculty:</labe>
                                                        </th>
                                                        <td><?php echo $data["S_faculty"]; ?></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >ROll:</labe>
                                                        </th>
                                                        <td><?php echo $data["Roll"]; ?></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >Semester:</labe>
                                                        </th>
                                                        <td><?php echo $data["Semester"]; ?></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >Phone:</labe>
                                                        </th>
                                                        <td><?php echo $data["S_phone"]; ?></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >Address:</labe>
                                                        </th>
                                                        <td><?php echo $data["C_address"]; ?></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >Guadrinas Name:</labe>
                                                        </th>
                                                        <td><?php echo $data["G_name"]; ?></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >Guadrinas Number:</labe>
                                                        </th>
                                                        <td><?php echo $data["G_phone"]; ?></td>
                                                    </tr>
                                                    <tr class="">
                                                        <th>
                                                            <labe >Scholarship:</labe>
                                                        </th>
                                                        <td><?php echo $data["Scholarship"]; ?></td>
                                                    </tr>
                                                  


                                                 
                                                    
                                                </table>

                                        </div>



                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger " data-bs-dismiss="modal">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </td>


                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</div>
<!-- crud section ends   -->








<!-- The Modal for new data -->
<div class="modal fade modal-dialog-scrollable text-dark" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header shadow">
                <h4 class="modal-title  ">Fill in the form below</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body text-dark">
                <form action="" method="POST">
                    <div class="mb-3 mt-3">
                        <label for="name" class="form-label">Name of student:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                    </div>

                    <div class="mb-3 mt-3">
                        <h6 class="d-inline-block me-4">Gender:</h6>
                        <label class="form-check-label ms-4">
                            <input type="radio" class="form-check-input gender" name="gender" id="gender" value="Male">
                            Male
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input gender" name="gender" id="gender" value="Female">
                            Female
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input gender" name="gender" id="gender" value="Others" checked>
                            Others
                        </label>
                    </div>

                    <div class="mb-3 mt-3 d-flex ">
                        <label for="year" class="form-label mx-4">Year:</label>
                        <select name="year" id="year" class="form-select mx-4" aria-label="Default select example" required>
                            <option selected value="1">I</option>
                            <option value="2">II</option>
                            <option value="3">III</option>
                        </select>
                        <label for="part" class="form-label mx-4">Part:</label>
                        <select name="part" id="part" class="form-select  mx-4" aria-label="Default select example" required>
                            <option selected value="1">I</option>
                            <option value="2">II</option>
                        </select>
                        </label>
                    </div>
                    <div class="form-check mb-3 mt-3 d-flex justify-content-around">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input faculty" name="faculty" id="faculty" value="DCOM" checked>
                            DCOM
                        </label>
                        <label class="form-check-label ">
                            <input type="radio" class="form-check-input faculty" name="faculty" id="architecutre" value="Architecture">
                            Architecture
                        </label> <label class="form-check-label">
                            <input type="radio" class="form-check-input faculty" name="faculty" id="civil" value="Civil">
                            Civil
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input faculty" name="faculty" id="E&E" value="E&E">
                            E&E
                        </label>
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input faculty" name="faculty" id="Electrical" value="Electrical">
                            Electrical
                        </label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="roll" class="form-label">Class roll number:</label>
                        <input type="number" class="form-control" id="roll" placeholder="Enter roll number" name="roll" minlength=1 maxlength=2 required>
                    </div>

                    <h4 class="d-flex justify-content-center"><strong><i><u>Optional</u></i></h4>
                    <div class="mb-3 mt-0">
                        <label for="phone" class="form-label">Phone no:</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter address" name="address">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="Gname" class="form-label">Guardian's Name</label>
                        <input type="text" class="form-control" id="Gname" placeholder="Enter Guardian's name" name="Gname">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="Gphone" class="form-label">Guardian's number:</label>
                        <input type="text" class="form-control" id="Gphone" placeholder="Enter Guardian's number" name="Gphone">
                    </div>



                    <button onclick="addData();" type="submit" name="insertData" class="btn btn-primary">Add Data</button>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<!-- new data inserting model ends here  -->