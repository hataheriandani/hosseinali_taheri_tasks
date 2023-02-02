<?php 
$title = "Contact Us : Hamk oy";
include "header.php" ?>

<h2>There is always something for everyone.</h2>
    </div>

    <div class="row2">
      <div class="col-md-8">
        <p>Bon Appétit is located in the historic premises of the Swedish Theater in Helsinki. Here we serve, among other things, classic dishes such as Biff Rydberg, a classic Skagen, Skaldjursplatå and other delicacies. We invest in high-quality service, good drinks and good ingredients. We also manage the intermission service at the Swedish Theatre, which you can book in advance.</p>         
        <p>At Bon Appétit we serve grilled premium hamburgers and kebabs with good accessories and top quality ingredients. We invest in small-scale preparation and cooking, freshly baked bread and the house's own dressings.</p>
      </div>
    </div>

    <div class="row3">
      <a class="breakfast.php" href="breakfast.php">
        <img src="images/breakfast.jpg" alt="breakfast menu" style="width:90%">
        <div class="container">
          <br>
          <h4><b>BREAKFAST</b></h4>
        </div>
      </a>

      <a class="card2" href="lunch.php">
        <img src="images/lunch.jpg" alt="lunch menu" style="width:90%">
        <div class="container">
          <br>
          <h4><b>LUNCH</b></h4>
        </div>
      </a>

      <a class="card3" href="dinner.php">
        <img src="images/dinner.jpg" alt="dinner menu" style="width:90%">
        <div class="container">
          <br>
          <h4><b>DINNER</b></h4>
        </div>
      </a>
    <style>
        h1 {
    text-align: left;
    margin-top: 60px;
    margin-left: 10px;
    color: #ffde00;
    font-size: 90px;
    text-shadow: (5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);
}

h2 {

    font-family:Edwardian Script ITC;
    font-size: 65px;
    text-align: left;
    margin-bottom: 20px;
    text-shadow: (5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);

}


.home {
    width: 60px;
    margin-top: 90px;
    -webkit-filter: drop-shadow(5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);
}

.home :hover {
    transform: scale(1.1);
}

.left {
    text-align: left;
}



.row2 {
    width: 1000px;

}

.row3 a:link { /*Breakfast, lunch, Dinner font color */
    color:#ffde00;
    text-decoration: none;
}

a:link { /*Tel number color */
    color:#222629;
}

.row3 {
    display: flex;
    justify-content: space-between;
    text-align: center;
    margin-bottom: 20px;
    margin-top: 30px;
}
.card1 {
    -webkit-filter: drop-shadow(5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);
}
.card2 {
    -webkit-filter: drop-shadow(5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);
}
.card3 {
    -webkit-filter: drop-shadow(5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);
}

.card1 :hover{
    transform: scale(1.1);
}
.card2 :hover{
    transform: scale(1.1);
}
.card3 :hover{
    transform: scale(1.1);
}
    </style>
    </div>
    <?php include "footer.php"?>