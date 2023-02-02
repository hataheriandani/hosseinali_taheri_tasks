<?php
$title = "Exercise : Hamk oy";
include "header.php";?>
    <h1>3.1 Write a simple PHP script to print your information (Name and your groupid). </h1>
<?php
//opening tag
echo "Hosseinali Tahei Andani <br>";
echo "BBCAP22<br>";
?>
<h1>3.2 Write PHP code to display the following message.</h1>
<?php
echo "Hello world! My name is \"David\"";
?>
<h1>3.3 Current Date</h1>
<?php
echo Date("d.m.Y")
?>
<h3>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. </h3>
<?php
$title1 = "PHP is interesting";
echo "<h1>" . $title1 . "</h1>";
?>
<h3>3.5 table & variables </h3>
<?php
$g1=5;
$g2=4;
$g3=5;
echo "
<table>
<tr>
<th> S.N </th><th>Name</th><th>Grade</th>
</tr>
<tr>
<th> 1 </td><td>Pekka</td><td>$g1</td>
</tr>
<tr>
<th> 2 </td><td>Johanna</td><td>$g2</td>
</tr>
<tr>
<th> 3 </td><td>John</td><td>$g3</td>
</tr>
</table>
";
?>
<h3> 4 Screenshot of the development environment </h3>
<img src="images/screenshot.png" alt="docker" width="800">
<h3>5 Commit all changes and push all changes you have done to your GitHub repository.</h3>

<?php include "footer.php";?>

