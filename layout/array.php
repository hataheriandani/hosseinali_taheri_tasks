<?php 
$title = "Contact Us : Hamk oy";
include "header.php" ?>
<h2> 5 In-class Task Arrays  09.02.2023 (array.php) </h2>
<h4>
1- Write a php script to display courses as list. Use <li>
</h4>
<?php
$courses = array("PHP", "HTML", "JavaScript", "CMS", "Project");

echo "<ul>";
for ($i = 0; $i < count($courses); $i++) 
        {
            echo "<li> $courses[$i] . <br>";
        }
echo "</ul>";
?>
<h4>
2- The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
Delete an element from the array below:
$courses1=array("PHP", "HTML", "JavaScript", "CMS", "Project");
</h4>
<?php
$courses1 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

unset($courses1[4]);
echo "<ul>";
for ($i = 0; $i < count($courses1); $i++) 
        {
            echo "<li> $courses1[$i] . <br>";
        }
echo "</ul>";
?>
<h4>
3- Sort the following array 
$courses3=array("PHP", "HTML", "JavaScript", "CMS", "Project");
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sort by Value
d) descending order sort by Key
</h4>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

asort($courses3);

echo "Ascending order sort by value:<br>";
echo implode(",", $courses3);
?>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

ksort($courses3);

echo "<br> Ascending order sort by key:<br>";
echo implode(",", $courses3);
?>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

arsort($courses3);

echo "<br> Descending order sort by value:<br>";
echo implode(",", $courses3);
?>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

krsort($courses3);

echo "<br>Descending order sort by key:<br>";
echo implode(",", $courses3);
?>
<h4>
4- Change the following array's all values to upper case.
 $courses4=array("php", "html", "javascript", "cms", "project");
</h4>
<?php
$courses4 = array("php", "html", "javascript", "cms", "project");

$courses4 = array_map("strtoupper", $courses4);

for ($i = 0; $i < count($courses4); $i++) {
    echo $courses4[$i] . "<br>";
}
?>
<h4>
5- List all your favorite colors and their hexadecimal equivalents. (associative arrays)
</h4>
<?php
$colors = array(
  "blue" => "#0000ff",
  "yellow" => "#ffff00",
  "pink" => "#ffc0cb",
  "orange" => "#ffa500",
  "black" => "#000000",
  "gray" => "#808080"
);

$keys = array_keys($colors);

for ($i = 0; $i < count($keys); $i++) {
    echo $keys[$i] . ": " . $colors[$keys[$i]] . "<br>";
}
?>
<h4>
6- PHP script to calculate and display average temperature, five lowest and highest temperatures.

Recorded temperatures : 78, 60, 62, 68, 71, 68, 73,
 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 
 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
</h4>
<?php
echo "<hr><h2> Calculation average temperature: </h2>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
// what is explode and what does the below code do? : 
 /*The 'explode' function in PHP is a built-in function that is used to split a string into an array.
   It takes two parameters: the string to be split and the delimiter (the character or string used to separate the string into pieces).*/
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
// What is count?
 /*'count' is a built-in function in PHP that returns the number of elements in an array, or the number of characters in a string.
    It can be used to determine the size of an array or string, which can be useful for looping through the elements or characters.*/
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
// what does sort do?
/*The 'sort' function in PHP is a built-in function that sorts an array in ascending order. 
  It rearranges the elements of the array so that they are listed in alphabetical or numerical order.
  By default, 'sort' sorts arrays in ascending order based on the values of the elements.*/
sort($temp_array);
echo "<br> List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>List of five highest temperatures :";
// explain the following loop
/*The for loop in the given code is used to display the last five elements of the $temp_array array.
  The loop starts with $i equal to ($temp_array_length-5) and continues until $i is less than ($temp_array_length).
  In each iteration of the loop, $temp_array[$i] is printed, followed by a comma and a space.
  The loop continues to run until $i is no longer less than ($temp_array_length).*/
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
?>

<?php include "footer.php"?>