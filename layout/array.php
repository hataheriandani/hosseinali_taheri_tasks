<?php 
$title = "Contact Us : Hamk oy";
include "header.php" ?>
<h2> 5 In-class Task Arrays  09.02.2023 (array.php) </h2>
<h4>
1.  Write a php script to display courses as list. Use <li>
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
The unset() function is used to remove element from the array. The var_dump() function is used to dump information about a variable.  array_values() is an inbuilt function that returns all the values of an array and not the keys.
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
Sort the following array 
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
for ($i = 0; $i < count($courses3); $i++) {
    echo "<li>$courses3[$i] . <br>";
}
?>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

ksort($courses3);

echo "Ascending order sort by key:<br>";
for ($i = 0; $i < count($courses3); $i++) {
    echo $courses3[$i] . "<br>";
}
?>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

arsort($courses3);

echo "Descending order sort by value:<br>";
for ($i = 0; $i < count($courses3); $i++) {
    echo "<li>$courses3[$i] . <br>";
}
?>
<?php
$courses3 = array("PHP", "HTML", "JavaScript", "CMS", "Project");

krsort($courses3);

echo "Descending order sort by key:<br>";
for ($i = 0; $i < count($courses3); $i++) {
    echo $courses3[$i] . "<br>";
}
?>






<?php include "footer.php"?>