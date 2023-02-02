<?php
$title = "About Us : Hamk oy";
include "header.php" ?>
<body>

<div class="wrapper">
<div class="container>">

<!--second row-->
        <div class="row2">
            <div class="col align-self-center">
              <img class="left" src="images/left.jpg" alt="left image"></div>
            <div class="col align-self-center">
                <div class="matn">A twist on the classic ricotta hotcake<div class="price">$8.00 </div></div>
                <div class="matn1"> Teff pancakes with sweet dukkah and apple and pear compote<div class="price1"> $6.41</div></div>
                <div class="matn2"> Crispy rice pancake with potatoes and chicken<div class="price2">$9 </div></div>
                <div class="matn3">hot chocolate and croasaant<div class="price3">$5.4 </div></div>
                <div class="matn4">pancakes with chocolate<div class="price4">$7.66 </div></div>
                <div class="matn5">vegan salade with toasted bread<div class="price5">$10.95 </div></div>
                <div class="matn6">spaghetti saute with milk<div class="price6">$8.88 </div></div>
            </div>
            <div class="col align-self-center"><img class="right" src="images/right.jpg" alt="right image"></div>
        </div>
      </div>
     
          <style>
            body {

background-color: #222629;
font-family:Arial, Helvetica, sans-serif;
font-size: large;
width: 1080px;
width: 90%;
margin:auto;
display: flex;
justify-content: space-between;
color: #ffde00;
}
.row1{
display: flex;
}
.logo {

width: 200px;
margin-top: 20px;
}

h2{
font-family: Edwardian Script ITC;
font-size: 65px;
text-align: left;
margin:150px 30px 25px 10px;
text-shadow: (5px 5px 5px #141516);
filter: drop-shadow(5px 5px 5px #141516);
}

.row2{
display: flex;
color: white;
}

img {
width: fit-content;

}
.home {
    width: 60px;
    margin-top: 90px;
    -webkit-filter: drop-shadow(5px 5px 5px #141516);
    filter: drop-shadow(5px 5px 5px #141516);
}

.left {
display: flex;
text-align: left;
width: 210px;
margin: 100px 0 0 90px;
}

.center {
text-align: center;
}

.right {
text-align: right;
width: 250px;
margin: 100px 0px 0 50px;
}
.price,.price1, .price2,.price3,.price4,.price5,.price6 {
color: #ffde00;

}
.price{
margin: 0px 10px 0 10px;
}
.price1{
margin: 25px 130px 0 10px;
}
.price2{
margin: 26px 230px 0 3px;
}
.price3{
margin: 0px 4px 0 10px;
}
.price4, .price5,.price6{
margin: 0px 0px 0 15px;
}
.matn,.matn1,.matn2,.matn3,.matn4,.matn5,.matn6{
display: flex;
margin-left: 1px;
margin-bottom: 15px;
}
.matn1{
display: flex;
}


.footer-box{
background-color: #ffde00;
color: #141516;
display: flex;
justify-content: space-between;
margin: 100px 0px 0 0px;

}

.col-md-8,.col-md-4 {
display:block;
justify-content: space-between;
}


@media (max-width: 1080px) {
body {
width: fit-content;
margin: 0 16px 16px 16px;
    
}
.wrapper {
display: block;
justify-content : center ;
align-items:center ;
height : auto;
width: 100%;
}
img {
display: block;
margin: 0 0 16px 0;
}
}

@media (max-width: 720px) {
body {
    width: fit-content;
    margin: 0 16px 16px 16px;       
}
.wrapper {
    display: block;
    justify-content : center ;
    align-items:center ;
    height : auto;
    width: 100%;
}
img {
    display: block;
    margin: 0 0 16px 0;
}
}
@media (max-width: 450px) {
    body {
        width: fit-content;
        margin: 0 16px 16px 16px;       
    }
    .wrapper {
        display: block;
        justify-content : center ;
        align-items:center ;
        height : auto;
        width: 100%;
    }
    img {
        display: block;
        margin: 0 0 16px 0;
    }
    }
          </style>
          <?php include "footer.php";?>
