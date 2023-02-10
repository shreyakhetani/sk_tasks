<?php
$title = "A simple crud app";
include '../layout/header.php';
?>

<form method="post" action="">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="First Name" name="fname" required><br>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last Name " name="lname" required> <br>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="City" name="city" required> <br>
        </div>
        <div class="col">
            <select  name="groupid" >
                <option value="BBCAP22"> BBCAP22</option>
                <option value="BBCAP21"> BBCAP21</option>
                <option value="others"> Others</option>
            </select> <br>
        </div>
    </div>

    <div class="row">
        <input type="submit" value="submit" name ="submit">
    </div>

</form>

<?php

if(isset($_POST  ['submit'])){
    $fname = $_POST ['fname'];
    $lname = $_POST ['lname'];
    $city = $_POST ['city'];
    $groupid = $_POST ['groupid'];
    include 'db.php';

    $sql = "insert into studentinfo (fname,lname,city,groupid)
    values('$fname', '$lname' , '$city', '$groupid')";

    if ($conn -> query($sql) === true ){
        echo "Your information is adeed successfully";
    }
    else {
        echo "Error:" .$conn->error;
    }

}

?>



<?php include "../layout/footer.php" ?>