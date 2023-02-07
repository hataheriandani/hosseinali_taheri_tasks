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
<h2>
Prepare a simple html table and apply bootstrap style to the table.
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


<?php include "footer.php"?>