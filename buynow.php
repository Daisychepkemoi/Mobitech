<?php 
session_start();

include('conn.php');
$d= $_SESSION['productid'];
               // $conn=mysql_connect('localhost','root','kiprotichh', 'default');
  if (!isset($_SESSION['id'])) {
  header('location:login.php');
  exit();
}             

    // mysql_select_db('default');
 $pid=+19;
$query=("SELECT  productid,pname,pimage,categoryid,pprice,pricesale,pdescription,pquantity,pname FROM products where categoryid='1' AND productid='$d'");
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
  $p=$row['productid'];
 }
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
.containers .loginnn{
  width: 60%;
  height: 800px;
  background-color: white;
 float: left;
  margin-left: 20%;
  margin-top: 5%;
  position: inherit;
}
.loginnn .form{
  
height: 70%;
background-color: white;
width: 60%;
margin-left:  20%;
margin-right :  20%;
margin-bottom :  10px;
margin-top : 20px;

}
#signup{
  padding: 20px;
  padding-left: 100px;
  font-size: 20px;
  color: black;
  font-weight: 10px;
}
#psignup{
  padding: 10px;
  padding-left: 120px;
  font-style: italic;
  font-weight: 5px;
  font-size: 16px;
  color: blue;
}
#dont{
  font-style: italic;
  padding-left: 20px;
}
#do{
  font-style: initial;
}

.containers .desc{
  width: 100%;
  height: 90%;
  
}
.desc .realimage{
  float: left;
  margin-top: 50px;
  margin-left: 5%;
  height: 60%;
  width: 40%;
  /*background-color: gray;*/
}
.desc .description{
  height: 90%;
  width: 40%;
  margin-right: 5%;
  margin-top: 60px;
  background-color: white;
  float: right;
}
.realimage .rimage{
  height: 90%;
  width: 90%;
  margin: 5%;
  background-color: white;
}
.rimage h4{
padding-left: 50px;
padding-top: 10px;
}
.rimage img{
height: 80%;
width: 100%;
/*margin-top: 5%;*/
/*margin-bottom: 5%;*/
}
.description .rdesc{
  height: 90%;
  width: 90%;
  margin: 5%;
  background-color: white;
}
.rdesc h2 {
  padding: 40px;
}
.rdesc h4 {
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 5px;
}
.rdesc h4 br{
  padding-top: 5px;
}
.rdesc button{
height: 10%;
  /*float: right;*/
  width: 200px;
  margin-left: 100px;
  margin-top: 100px;

  
}
#pro{
  color: white;
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
          <li><a href="laptops.php">Laptops</a></li>
          <li><a href="#">Phone Accesories</a></li>
        </ul>
      </li>
      <li><a href="#">New Products</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <form class="navbar-form navbar-left" name="submit" action="/action_page.php">
                        <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <a href="logout.php" id="but" class="btn btn-default">LogOut</a>
                         <a href="" id="but" class="btn btn-default">SignUp</a>
                        <!-- <button ><a href="" id="but" class="btn btn-default">SignUp</a></button> -->
                 </form>
  </div>
</nav>
              
        </div>
      </div>
     </div>
   </div>
   <hr>
   <div class="contents">
    <div class="containers">
    <div class="desc">
      
        <div class="realimage">
           <div class="rimage">
             <img src="images/phones/<?php echo $image; ?>">
             <h4><?php echo $pname; ?></h4>
           </div>
        </div>
        <div class="description">
           <div class="rdesc">
      <h2><?php echo $description; ?> <br> </h2> <h4>DiscountedPrice ksh <ins> <?php echo $pricesale; ?></ins><br> OriginalPrice:Ksh <del> <?php echo $pprice; ?></del></h4>
 

<button type="submit" class="btn btn-primary"><a href="proceed.php" id="pro">Proceed To Purchase</a></button>
           </div>
           
        </div>
        
    
      </div>
      
    </div>
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
