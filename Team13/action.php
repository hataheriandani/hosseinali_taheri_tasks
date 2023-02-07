<?php include "header.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['date'];
$color = $_POST['color'];


echo "<h3> Your name is $fname $lname and your date of birth is $dob
and your favorite color $color </h3>";
?>

<?php include "footer.php"?>