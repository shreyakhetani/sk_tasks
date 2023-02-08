<?php
include "header.php";



$name = $_POST ['name'];
$age = $_POST ['age'];

if ($age >= 18)
{
    echo "$name is eligible for voting.";

}
else
{
    echo "$name is not eligible for voting.";
}

?>



<?php include "footer.php" ?>
?>