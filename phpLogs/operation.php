<?php



require_once("../phpLogs/config.php");



 //insert data into database
$param = $_POST;
if (isset($param["insertData"])) {

    $name = ucfirst(strtolower($param["name"]));
    $year = $param["year"];
    $part = $param["part"];
    $faculty = $param['faculty'];
    $gender = $param["gender"];
    $roll = $param["roll"];
    $phone = $param["phone"];
    $address = $param["address"];
    $email = $param["email"];
    $Gname = $param["Gname"];
    $Gphone = $param["Gphone"];
    $semester = checkSemester(intval($year), intval($part));

    //To reduce the duplicate data(check the presence of data in)
    $dataCheck = "SELECT * from `studentinfo` where S_name = '$name' and Semester = '$semester' and Roll= $roll";
    $checkRun = mysqli_query($conn, $dataCheck);

    //return the number of row if data already present 
    $checkRow = mysqli_num_rows($checkRun);

    if ($checkRow == 0) {

        $insertQuery = "INSERT INTO `studentinfo`(S_name, Gender, Roll, S_email, S_faculty, Semester, S_phone, C_address, P_address, G_name, G_phone) VALUES ('$name','$gender','$roll', '$email','$faculty','$semester','$phone','Jorpati','Ktm','$Gname','$Gphone')";
        $insertionRun = mysqli_query($conn, $insertQuery);
    } else {
?>
        <script>
            alert("Data is already present in the Table");
        </script>
    <?php
    }
};




//Changin the users inputed Year/Part into semester
function checkSemester($year, $part)
{
    $sem = ($year - 1) * 2 + $part;
    return $sem;
};








//Update the table
$method = $_POST;
if (isset($_POST["update"])) {
    $id = $method["id"];
    $name = $method["name"];
    $gender = $method["gender"];
    $year = $method["year"];
    $part = $method["part"];
    $roll = $method["roll"];
    $faculty = $method["faculty"];
    //optional datas
    $phone = $method["phone"];
    $g_name = $method["G_name"];
    $g_phone = $method["G_phone"];
    $email = $method["email"];
    $address = $method["address"];
    $semester = checkSemester(intval($year), intval($part));

    //Update query
    $updateQry = "UPDATE `studentinfo` SET `S_name`='$name',`Gender`='$gender',`Roll`='$roll',`S_email`='$email',`S_faculty`='$faculty',`Semester`='$semester',`S_phone`='$phone',`C_address`='$address',`P_address`='',`G_name`='$g_name',`G_phone`='$g_phone' Where S_id = $id";
    $updateRun = mysqli_query($conn, $updateQry);

    if ($updateRun) {
    ?>
        <script>
            alert("data updated");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Something went wrong while updating the data<br> we'll fix it soon");
        </script>
<?php
    }
};
?>