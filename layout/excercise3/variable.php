<?php include "header.php" ?>
<h3>In-class Task Variable & Operators 07.02.2023 (variable.php)
</h3>
<h2>
1 Create a simple html form to get Firstname and Lastname from the
user and use echo echo statement to print using <h3> 
tag: Hello …., You are welcome to my site.
</h2>
<form action="action.php" method="post">
<div class="row">

    <div class="col">
     <input type="text" Name="fname" required placeholder="First Name" class="form-control">
    </div>
    <div class="col">
     <input type="text" Name="lname" required placeholder="Last Name" class="form-control"></div>
    </div>
    Birst Date: <input type="date" Name="date"><br>
    Select fv color: <input type="color" Name="color"><br>
    <input type="submit" value="submit"><br>
    
</form>
<h2>
3 Prepare a simple html table and apply bootstrap style to the table.
</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Birth</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Hosseinali</td>
      <td>Taheri</td>
      <td>1988</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Afsani</td>
      <td>Emadi</td>
      <td>1990</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Zahra</td>
      <td>Mojiri</td>
      <td>1970</td>
    </tr>
  </tbody>
</table>
<h2>
4 Write a PHP script with two string variables. Assign any text to these variables. Join them together.
Print the length of the string. (Hint: string function)
</h2>
<?php
$city = "Hämeenlinnan";
$verb = "on";
$adjective = "Kaunis Kaupunki.";
echo $sentence= $city . " " .$verb. " " . $adjective;
echo "<br>" ."The lenght of above sentence is " . strlen($sentence);
 ?>
 <h2>5 Write a script to add up the numbers: 298, 234, 46.
     Use variables to store these numbers and echo statement
      to output your answer.
</h2>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;
echo "Sum of" . " " . $num1 ." " . "," ." " . $num2 ." " . "and" ." " . $num3 . " " . "is" . " " . $sum . ".";
?>
<h2>6 Write a PHP script to detect the browser being used to view 
    your pages. (Use predefined variables: $_SERVER). 
</h2>
<?php
 $user_agent = $_SERVER['HTTP_USER_AGENT'];
 if (strpos($user_agent, 'Edg') !== false) {
     echo "You are using Microsoft Edge";}
 elseif (strpos($user_agent, 'Firefox') !== false) {
     echo "You are using Mozilla Firefox";}
 elseif (strpos($user_agent, 'Chrome') !== false) {
     echo "You are using Google Chrome";}
 elseif (strpos($user_agent, 'MSIE') !== false) {
     echo "You are using Internet Explorer";}
 elseif (strpos($user_agent, 'Safari') !== false) {
     echo "You are using Apple Safari";}
 else {
     echo "Your browser is not recognized";}
?>
<h2>7 Write a PHP script in the footer section of your universal footer
     just below the Copyright information to display the last modification time of a file. 
     (Hint: Use predefined variable $_SERVER, basename function  to get the filename ,
      filetime function to get the last modified time & date function to print the date and time)
</h2>


<?php include "footer.php"?>