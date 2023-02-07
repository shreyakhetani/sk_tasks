<?php
$title = "Exercise 3";
include "header.php" ?>

<h3>In-class Task Variable & Operators(variable.php)</h3>

<h2>1. Create a simple html form to get Firstname and Lastname from the user and use echo echo statement to print using
    tag: Hello …., You are welcome to my site.</h2>

<form action="action.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="First Name" name="fname" required>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder=" Last Name" name="lname" required>
        </div>
    </div>
    <div class="row">
        <div class="col">
            Date: <input type="Date"  class="form-control" name="bdate">
         </div>
        <div class="col">
            select fav color: <input type="color"  class="form-control"  name="color">
        </div>
        </div>
        <div class="row">
        <input type="submit" value="submit">
        </div>

  
</form>

<h2>3. Prepare a simple html table and apply bootstrap style to the table</h2>

  <table class="table table-bordered" >
<tr>
    <th scope="col">S.N</th>
    <th scope="col">Name</th>
    <th scope="col">Grade</th>
</tr>
<tr>
<td>1</td>
<td>Pekka</td>
    <td>4</td>
</tr>
<tr>
    <td>2</td>
    <td>Johanna</td>
    <td>5</td>
</tr>
<tr>
    <td>3</td>
    <td>Jhon</td>
    <td>5</td>
</tr>
</table>";

<h2>4. Write a PHP script with two string variables. Assign any text to these variables. Join them together.  Print the length of the string. (Hint: string function) </h2>

<?php
$text1 = "Suffren was a predreadnought battleship built for the French Navy and completed in 1902.";
$text2 = "The ship was assigned to the Mediterranean Squadron";

echo "$text1 . $text2 <br>";
echo strlen($text1 . $text2);

?>

<h2>5. Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and echo statement to output your answer. </h2>

<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;

echo $num1 + $num2 + $num3;
?>

<h2>6. Write a PHP script to detect the browser being used to view your pages.</h2>

<?php
echo $_SERVER['HTTP_USER_AGENT'];
?>

<?php include "footer.php" ?>