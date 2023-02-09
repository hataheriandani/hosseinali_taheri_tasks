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







<?php include "footer.php"?>