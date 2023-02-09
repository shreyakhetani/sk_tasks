<?php
$title = "Exercise 5";
include "header.php" ?>
 
<h2>Calulator</h2>
<form action="" method="get">
    <div class="row">
        <div>
            <input type="number" class="form-control" placeholder="Enter your first number" name="num1" step="any" required> 
            </div>
            <div>
            <input type="number" class="form-control" placeholder=" Enter your second number" name="num2" step="any" required>
            </div>
    </div>
    <div class="row">
        <div class="col">
            <select name="operator" id="">
                <option value="add">Add</option>
                <option value="sub">Substract</option>
                <option value="mul">Multiply</option>
                <option value="div">Divide</option>
            </select>
         </div>
        </div>
        <div class="row">
        <input type="submit" name="cal" value="Calculate">
        </div>
</form>

<?php
if (isset($_GET[ "cal" ] )){
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $operator = $_GET["operator"];

    switch($operator){
        case "add":
            $result = $num1 + $num2;
            break;
         case "sub":
             $result = $num1 - $num2;
            break;
         case "mul":
             $result = $num1 * $num2;
              break;

          case "div":
             $result = $num1 / $num2;
             break;
        default:
            $result = "Error: you have not selected the correct operator";
    }
}

if (isset($result)){
    echo "<h2> Result: $result  </h2>";
}


?>

<h2>1. Write a php script to display courses as list.</h2>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");

for ($i =0; $i < count($courses); $i++){

    echo "<li> $courses[$i] </li>";

}

?>

<h2>2. Delete an element from the array</h2>

<?php
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
unset($courses1[2]);
var_dump($courses1);

?>

<h2>3. Sort the following array </h2>
<?php

echo "<h4> a) ascending order sort by value </h4>";

$courses3=array("C1" =>"PHP", "C2" => "HTML", "C3" =>"JavaScript", "C4" => "CMS", "C5" => "Project");
asort($courses3);

foreach ($courses3 as $key => $value)
{
    echo $key . " = " . $value . "<br>";
}
?>

 <h4>b) ascending order sort by Key</h4>
<?php
ksort($courses3);

foreach ($courses3 as $key => $value)
{
    echo $key . " = " . $value . "<br>";
}
?>

<h4> c) descending order sort by Value </h4>
<?php
arsort($courses3);

foreach ($courses3 as $key => $value)
{
    echo $key . " = " . $value . "<br>";
}
?>


<h4> d) descending order sort by Key </h4>
<?php
Krsort($courses3);

foreach ($courses3 as $key => $value)
{
    echo $key . " = " . $value . "<br>";
}
?>


<h2>4. Change the following array's all values to upper case.</h2>

<?php
 $courses4=array("php", "html", "javascript", "cms", "project");

 $strtoupper = array_map('strtoupper', $courses4);

 for ($i =0; $i < count($strtoupper); $i++){

    echo "<br>";
    echo  $i . ": " . $strtoupper[$i] ;

 }


?>

<h2>5. List all your favorite colors and their hexadecimal equivalents. (associative arrays)</h2>
<?php
   $color=array("#000000"=>"Black", "#FFFFFF" => "Red", "#FFFF00" => "White", "#282A3A" => "Grey");
   foreach ($color as $hd => $hd_color)
{
    echo $hd . " = " . $hd_color . "<br>";
}

?>

<h2>6. PHP script to calculate and display average temperature, five lowest and highest temperatures.</h2>
<?php
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
//  Explode splits a string in diffrent strings and this code splits the strings and returns the array
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// count returns the number of elements in an array
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// Sort arrays in ascending order
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// $i=($temp_array_length-5) this sets the index postion of heights temprature and loops through the array and prints it.
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>

<?php include "footer.php" ?>