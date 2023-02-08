<?php include "header.php" ?>
<h2>In-class Task Control flow and loops 08.02.2023 (controlflow.php)</h2>
<h4>
1- Write a script that gets the current month and prints one of the following responses,
 depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays:
</h4>
<?php
$main_month = date("F");

if ($main_month == "August") {
    echo "It's August, so it's still holiday.";
} else {
    echo "Not August, this is $main_month so I don't have any holidays.";
}
?>
<h4>
2- Assign colour red to a variable name $color and check to print one the following responses (if else statement)
The color is red. 
The color is not red.
</h4>
<?php
$color_bace = "red";

if ($color_bace == "red") {
    echo "The color is red.";
} else {
    echo "The color is not red.";
}
?>
<h4>
3- Write a program to grade students based on their total score for a subject. Use variable to hold the total score. The grading scheme is: 
Excellent: >80; 
Great > 70 & less than 80;
Good > 60 & less than 70; 
Pass > 50 & less than 60;
Fail < 50 
</h4>
<?php
$total_score = 75;

if ($total_score > 80) {
    echo "Excellent";
} elseif ($total_score > 70 && $total_score < 80) {
    echo "Great";
} elseif ($total_score > 60 && $total_score < 70) {
    echo "Good";
} elseif ($total_score > 50 && $total_score < 60) {
    echo "Pass";
} else {
    echo "Fail";
}
?>



<?php include "footer.php"?>