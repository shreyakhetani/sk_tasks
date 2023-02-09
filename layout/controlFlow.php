<?php
$title = "Exercise 4";
include "header.php" ?>


<h2>1. Write a script that gets the current month and prints one of the following responses</h2>
<?php
$d = date("F");
if ($d == "August")
{
    echo " It's" . $d . ", so it's still holiday." ;
}
else
{
  echo "Not August, this is" . $d . " so I don't have any holidays";
}
?>

<h2>2. Assign colour red to a variable name $color and check to print one the following responses</h2>

<?php
$color = "red";
if($color == "red")
{
    echo "The color is red.";
}
else{
    echo "The color is not red";
}
?>

<h2>3. Write a program to grade students based on their total score for a subject.</h2>

<?php
$score = 85;

if($score > 80)
{
    echo "Excellent";
}
elseif($score>70 & $score <= 80 )
{
    echo "Great";
}
elseif ($score>60 & $score <= 70)
{
    echo "Good";
}
elseif ($score>50 & $score <= 60)
{
    echo "Pass";
}
else
{
    echo "Fail";
}
?>


<h2>4. Write a program to get inputs (age and name) from the user and based on their age,</h2>
<form action="action2.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="First Name" name="name" required>
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder=" Age " name="age" required>
        </div>
    </div>
   
        <div class="row">
        <input type="submit" value="submit">
        </div>
</form>


<h2>5. You used $_SERVER['HTTP_USER_AGENT']; to get the browser name.</h2>

<?php
$user_agent =$_SERVER['HTTP_USER_AGENT'];
echo $user_agent;

switch (true){
    case strpos($user_agent, 'Edg'):
        echo " <br> You are using Microsoft Edge.";
        break;
    case strpos($user_agent, 'Chrome'): 
        echo  " <br> You are using Google Chrome";
        break;

    case strpos($user_agent, 'Mozilla'):
        echo "you are using Firefox.";
        break;
    default:
        echo " <br> Browser cannot be defined.";
}

?>


<?php include "footer.php" ?>