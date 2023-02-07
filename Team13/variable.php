<?php include "header.php" ?>
<h3>In-class Task Variable & Operators 07.02.2023 (variable.php)
</h3>
<h2>
Create a simple html form to get Firstname and Lastname from the
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

<?php include "footer.php"?>