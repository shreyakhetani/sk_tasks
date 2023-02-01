<?php include "header.php" ?>
    <h1>3.1 Write a simple PHP script to print your information (Name and your groupid).</h1>
<?php
//Opening tag
echo "Shreya Khetani <br>";
echo "BBCAP22";
?>
<h1> 3.2Write PHP code to display the following message.
</h1>
<?php
echo "Hello world! My name is \"David \" ";
?>
<h1> 3.3 current date. </h1>
<?php
echo date("d.m.Y")
?>
<h1> 3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document.</h1>
<?php
$title = "PHP is intresting.";
echo "<h1> . $title . </h1>"
?>
<h1>3.5 $g1=5, $g2=4, $g3=5. These are the grades for 3 students in the course. Use HTML table into echo and include 3 columns S.n., Name, and grade. Your table should look like the one below:</h1>
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;

echo " <table>
<tr>
    <th>S.N</th>
    <th>Name</th>
    <th>Grade</th>
</tr>
<tr>
<td>1</td>
<td>Pekka</td>
    <td>$g1</td>
</tr>
<tr>
    <td>2</td>
    <td>Johanna</td>
    <td>$g2</td>
</tr>
<tr>
    <td>3</td>
    <td>Jhon</td>
    <td>$g3</td>
</tr>
</table>";
?>

<h1>4. Take a screenshot  </h1>
<img src="image.png" alt="Screenshoot" width="500px" height="400px" >

<?php include "footer.php" ?>

