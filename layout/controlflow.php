<?php include "header.php" ?>
<h2>In-class Task Control flow and loops 08.02.2023 (controlflow.php)</h2>
<h3>
1- Write a script that gets the current month and prints one of the following responses,
 depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays:
</h3>
<?php
$main_month = date("F");

if ($main_month == "August") {
    echo "It's August, so it's still holiday.";
} else {
    echo "Not August, this is $main_month so I don't have any holidays.";
}
?>




<?php include "footer.php"?>