<?php
$title = "About Us : Hamk oy";
include "header.php" ?>
<body>

<div class="wrapper">
<div class="container>">

<!--second row-->
        <div class="row2">
            <div class="col align-self-center">
              <img class="left" src="images/left.png" alt="left"></div>
            <div class="col align-self-center">
              <p style="color:whitesmoke;">A boneless barbecue chicken skewer <span style="color: #ffde00;">$8.50</span></p>

              <p style="color: whitesmoke;">Six pieces of Swedish beef <span style="color: #ffde00;">$7.50</span></p>
              
              <p style="color: whitesmoke;">Vegetable pilaf with salmon <span style="color: #ffde00;">$12.50</span></p>
              
              <p style="color: whitesmoke;">Kebab leaves with veal fillet <span style="color: #ffde00;">$10.50</span></p>
              
              <p style="color: whitesmoke;">Beans and rice with muscle <span style="color: #ffde00;">$11.50</span> 
              
                <p style="color: whitesmoke;">Fried chicken with special sauce of <br>
              
              pomegranate paste <span style="color: #ffde00;">$8.50</span></p>  
               
            </div>
            <div class="col align-self-center"><img class="right" src="images/ledd.png" alt="ledd"></div>
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
width: 300px;
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
margin: 27px 140px 0 0px;
}
.price1{
margin: 0px 210px 0 10px;
}
.price2{
margin: 54px 190px 0 3px;
}
.price3{
margin: 27px 199px 0 0px;
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