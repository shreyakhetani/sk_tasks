<?php
include "header.php";

$fname = $_POST ['fname'];
$lname = $_POST ['lname'];
$bdate = $_POST ['bdate'];
$color = $_POST ['color'];

echo "<h3> Your name is $fname $lname your BOD is $bdate and fav color is $color</h3>";

?>



<?php include "footer.php" ?>
?>