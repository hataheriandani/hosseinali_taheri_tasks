<?php include "header.php";

$fname = $_POST['fname'];
$dob = $_POST['Age'];

if ($dob >= 18) {
    echo "<h3> Your name is $fname  and your age  is $dob
    , you are eligible for voting.</h3>";
} else {
    echo "<h3> Your name is $fname  and your age  is $dob
    , you are not eligible for voting.</h3>";
}
?>


<?php include "footer.php"?>

