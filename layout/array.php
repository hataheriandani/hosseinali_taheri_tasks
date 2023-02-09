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
foreach ($courses as $course) {
  echo "<li>" . $course . "</li>";
}
echo "</ul>";
?>


<?php include "footer.php"?>