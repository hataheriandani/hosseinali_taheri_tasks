<?php
$tirle = "JavaScript Events and validation";
include "header.php"
?>
<h2>A simple button to display date</h2>
<button onclick="this.innerHTML = Date()">Click to know date </button>
<h2>Make a button and a place holder as paragraph for the date </h2>
<button onclick="getElementById('p1').innerHTML = Date()">Click to know date </button>
<p id="p1"></p>



<?php
include "footer.php"
?>