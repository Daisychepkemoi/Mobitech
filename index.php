<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>MobiTech</title>
   <link rel="stylesheet" type="text/css" href="style.css"> 
  <link rel="stylesheet" type="text/css" href="bootstrap.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .containers .navibar{
  height: 56%;
  width: 90%;
  /*background-color: red;*/
  margin-left: 5%;
}


.navibar .pone{
  height: 80%;
  margin: 2%;
  size: fixed
  width: 20%;
  background-color: #55FF55;
  /*background-color: red;*/
  display: inline-block;
}

.pone .image img{
/*background-size: cover;*/
height: 275px;
width:100%;
}
.pone h3{
padding-left: 25px;
font-size: 16px;
padding-left: 25px;
padding-top: 5px;
}
ins del {
  font-size: 16px;
}
.pone button{
  margin-left: 60px;
}
.pone .image img:hover{
  opacity: 0.9;
  overflow: visible;
}
.nyayo{
  background-color: grey;
}
.footer .hellp{
  height: 80%;
  width: 45%;
  margin-top: 1.5%;
  margin-left: 1.5%;
  float: left;
  /*background-color: ;*/

}
.footer .helper{
 height: 80%;
  width: 45%;
  margin-top: 1.5%;
  margin-right: 1.5%;
  float: right;
  /*background-color: blue;*/
}
..footer .helpest{
   height: 90%;
  width: 25%;
  float: left;
margin-left: 30%;
  background-color: gray;
}
.footer .conce{
  clear: both;
  height: 20%;
  /*background-color: yellow;*/
}

.hellp ul li {
  list-style-type: none;
  margin-left: 100px;
  padding-top: 10px;
  color: white;
  font-size: 20px;
}
.helper .contactus{
  height: 70%;
  margin-left: 15%;
  margin-top: 5%;
  width: 60%;
  /*background-color: white;*/
}
.contactus h4{
  padding-left: 100px;
  padding-top: 20px;
  color: white;
}
.contactus h5{
  padding-left: 100px;
  padding-top: 20px;
  color: white;
}.contactus ul li {
  list-style-type: none;
  margin-left: 100px;
  padding-top: 10px;
  color: white;
  font-size: 20px;
}
.conce h3{
  margin-left: 35%;
  font-size: 20px;
  color: white
}

</style>
<body>
  <div id="one">
 <div class="body" >
  <div>
    <ul>
      <li><a href=""><img src="images/fb.png">Facebook</a></li>
      <li><a href=""><img src="images/gmail.png">Mobitech@org</a></li>
      <li><a href=""><img src="images/twitter.png">@mobitech</a></li>
      <li><a href=""><img src="images/phone.png">+25470065211</a></li>
    </ul>
  </div>
   </div>
   <div class="head" id="body">
      <div class="tittle">
         <h1>MobiTech</h1>
      </div>
      <div class="navigation">
          <div class="navv">

            <nav id="navs" class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="phones.php">Phones</a></li>
          <li><a href="#">Laptops</a></li>
          <li><a href="#">Phone Accesories</a></li>
        </ul>
      </li>
      <li><a href="#">New Products</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <a href="loginn.php" id="but" class="btn btn-default">Login</a>
                         <a href="signup.php" id="but" class="btn btn-default">SignUp</a>
                        <!-- <button ><a href="" id="but" class="btn btn-default">SignUp</a></button> -->
                 </form>
  </div>
</nav>
              <!-- <nav id="navs" class="navbar navbar-default">
                <div id="navss" class="container-fluid">
                   <div id="navss" class="navbar-header">
                    <ul  id=" navss" class="nav navbar-nav">
                    
                 
                    <li class=""><a href="#">Home</a></li>
                    <li><a href="#">Page 1</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 2</a></li>
                    <li><a href="#">Page 2</a></li>
                   </ul>
                   <form class="navbar-form navbar-left" action="/action_page.php">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button ><a href="" id="but" class="btn btn-default">Login</a></button>
                        <button ><a href="" id="but" class="btn btn-default">SignUp</a></button>
                 </form>
              </div>
            </nav> -->
        </div>
      </div>
     </div>
   </div>
   <hr>
   <div class="contents">
    <div class="containers">
       <div class="navsbar">
          
            <h2>MobiTech Technologies,</h2>
            <h3>Get the gadget of your choice <button type="button" class="btn btn-success"> More..</button></h3>
         
       </div>
       <button id="oone" type="button" class="btn btn-secondary"> Popular Products</button></h3>

       <div class="navibar">
          <section class="pone" id="full">
            <div class="image" >
              <!-- <img src="images/phones/img2.jpg"> -->
                <?php 
               // $conn=mysql_connect('localhost','root','kiprotichh', 'default');
              include('conn.php');
    // mysql_select_db('default');

$query=("SELECT  pname,pimage,categoryid,pprice,pricesale,pdescription,pquantity,pname,productid FROM products where categoryid='1' AND productid='19'  ");
$result=mysqli_query($conn,$query) or die('couldnt querry'.mysqli_error($conn));
while ($row=mysqli_fetch_array ($result)){
  $pname=$row['pname'];
  $image=$row['pimage'];
  $category=$row['categoryid'];
  $pprice=$row['pprice'];
  $pricesale=$row['pricesale'];
  $description=$row['pdescription'];
  $pquantity=$row['pquantity'];
  $pname=$row['pname'];
   $d=$row['productid'];
  $_SESSION['productid'] = $d;
  // echo "<img>$img</img>;
   //echo "<img src='".$row['photo']."' />";
 
}
 


// $result = mysql_query("SELECT * FROM photo");

// while($row = mysql_fetch_array($result))
// {
// echo $row['photo'];
// echo "<br />";
// }

// mysql_close($conn);
?> 
<img src="images/phones/<?php echo $image; ?>">
            </div>
           <h3><?php echo $pname; ?>(<?php echo $pquantity ?>) &nbsp   <ins> ksh :<?php echo $pricesale; ?></ins><br> <del>KSH : <?php echo $pprice; ?></del></h3>
            <button type="button" class="btn btn-dark"><a href="login.php">Buy Now</a></button>
          </section>
          <section class="pone" id="full">
            <div class="image">
               <?php 
               // $conn=mysql_connect('localhost','root','kiprotichh', 'default');
              include('conn.php');
    // mysql_select_db('default');

$query=("SELECT  pname,pimage,categoryid,pprice,pricesale,pdescription,pquantity,pname,productid FROM products where categoryid='1' AND productid='20'  ");
$result=mysqli_query($conn,$query) or die('couldnt querry'.mysqli_error($conn));
while ($row=mysqli_fetch_array ($result)){
  $pname=$row['pname'];
  $image=$row['pimage'];
  $category=$row['categoryid'];
  $pprice=$row['pprice'];
  $pricesale=$row['pricesale'];
  $description=$row['pdescription'];
  $pquantity=$row['pquantity'];
  $pname=$row['pname'];
  // echo "<img>$img</img>;
   //echo "<img src='".$row['photo']."' />";
 
} ?>
              <img src="images/phones/<?php echo $image; ?>">
            </div>
            <h3><?php echo $pname; ?> (<?php echo $pquantity ?>) &nbsp   <ins> ksh :<?php echo $pricesale; ?></ins><br> <del>KSH : <?php echo $pprice; ?>
            <!-- <h3>TecnoJ8  &nbsp    <ins> ksh : 30000.00</ins><br> <del>30000.00</del></h3> -->
            <button type="button" class="btn btn-secondary"><a href="login.php">Buy Now</a> </button>
          </section>
          <section class="pone" id="full">
            <div class="image">
              <img src="images/phones/img2.jpg">
            </div>
            <h3><?php echo $pname; ?> &nbsp   <ins> ksh :<?php echo $pricesale; ?></ins><br> <del>KSH : <?php echo $pprice; ?>
            <!-- <h3>TecnoJ8  &nbsp   <ins> ksh : 30000.00</ins><br> <del>30000.00</del></h3> -->
            <button type="button" class="btn btn-secondary"><a href="login.php">Buy Now</a> </button>
          </section>
          <section class="pone" id="full">
            <div class="image">
              <img src="images/phones/img2.jpg">
            </div>
            <h3><?php echo $pname; ?> &nbsp   <ins> ksh :<?php echo $pricesale; ?></ins><br> <del>KSH : <?php echo $pprice; ?>
            <!-- <h3>TecnoJ8  &nbsp  <ins> ksh : 30000.00</ins><br> <del>30000.00</del></h3> -->
            <button type="button" class="btn btn-secondary"><a href="login.php"> Buy Now</a></button>
            
          </section>
       </div>

       
       </div>
      <div class="shipment">
            
        
        <div class="container">
            <div class="innercontainer">
                <section class="rrow">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </section>
               <section class="rrow">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </section>
                <section class="rrow">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </section>
                <section class="rrow">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </section>
            </div>
        </div>
    
      </div>
      <div class=""></div>
      <div class="footer">
        <div class="hellp">
         <ul>
           <li><h4>Most Viewed Products</h4></a></li>
           <li><a href="">Tecno</a></li>
           <li><a href="">Samsung</a></li>
           <li><a href="">Nokia</a></li>
           
         </ul>
          <ul>
           <li><h4>Short Cuts</h4></a></li>
           <li><a href="">Login</a></li>
           <li><a href="">New Products</a></li>
           <li><a href="">Phones</a></li>
           
         </ul>
        </div>
        <div class="helper">
          
          <div class="contactus">
             <H4>Subscribe to or email to get <br> the latest of Our deals</H4>
              <input type="email" name="names" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subscribe to email" required="">
              <h5>We give you notifications on daiy basis.</h5>
              <h4> <U>Sponsors </U></h4>
              <ul>
                <li><a href="">Jumia</a></li>
           <li><a href="">Msoko</a></li>
           <li><a href="">Tecno</a></li>
              </ul>
          </div>




        </div>
        <div class="helpest">
          





        </div>
        <hr>
        <div class="conce">
          <h3>created by Group 6 Comp Sci Y3 <br>Copy Right @2007</h3>
        </div>
      </div>

     </div>
 </div>
</div>







 
</body>
</html>
<script type="text/javascript">
  window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("body");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<script type="text/javascript">
  var div = document.getElementById("full");

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = array('#552AFF', '#FFFFFF');
    for (var i = color.length - 1; i >= 0; i--) {
      color[i];
    }
        
    }
    return color[];
}

function changeColor(){
  div.style.backgroundColor= getRandomColor();
}

setInterval(changeColor,1000);
</script>