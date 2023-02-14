<?php
$title = "Update your info";
include '../layout/header.php';
$a = $_GET['id'] ;
include 'db.php';
$result = mysqli_query($conn, "select * from studentinfo 
where id = '$a' ");

$row = mysqli_fetch_array($result);
?>

<h2> Update your information below </h2>
<form name="update" method="post" action="">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="First Name" name="fname" required value="<?php echo $row['fname']; ?>" ><br>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Last Name " name="lname" required value="<?php echo $row['lname']; ?>"> <br>
        </div>
    </div>
    <div class="row">
        <div class="col">       
            <input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['city']; ?>"> <br>
        </div>
        <div class="col">
            <select  name="groupid" value="<?php echo $row['groupid']; ?>">
                <option value="BBCAP22"> BBCAP22</option>
                <option value="BBCAP21"> BBCAP21</option>
                <option value="others"> Others</option>
            </select> <br>
        </div>
    </div>

    <div class="row">
    <div class="col">   
        <input type="submit" value="Update your Info" name ="update"> <br>
    </div>
    <div class="col">
    <input type="submit" value="Delet your Info" name ="delet"> <br>
    </div>
    </div>

</form>

<?php
if(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    $query = mysqli_query($conn, "UPDATE studentinfo set fname='$fname', lname='$lname', city='$city', groupid='$groupid' where id = '$a' ");

if($query){
    echo "<h2> Your information is updated succesfully </h2>";
}

else{
    echo "<h2> Record Not Modified </h2>" ;
}
}

if(isset($_POST['delet'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    $query = mysqli_query($conn, "DELETE FROM studentinfo where id = '$a' ");

if($query){
    echo "<h2> Your information is deleted succesfully </h2>";
}

else{
    echo "<h2> Record Not Modified </h2>" ;
}
}

?>