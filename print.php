
<?php 
 session_start();
 include("conn.php");
 $d= $_SESSION['productid'];
if (!isset($_SESSION['id'])) {
  header('location:login.php');
  exit();
}
$id=$_SESSION['id'];
// $useid=$_SESSION['user_id'];
$date=date('Y-m-d G:i:s');
$query="SELECT cemail,dprice,ppname,location, productid,total,phone from signup INNER JOIN purchases On signup.email=purchases.cemail where purchases.productid='$d' and signup.id='$id' ";
$resu=mysqli_query($conn,$query) or die('couldnt querry'.mysqli_error($conn));
                  while ($row=mysqli_fetch_array ($resu)){
                    $email=$row['cemail'];
                    $dprice=$row['dprice'];
                    $ppname=$row['ppname'];
                    $location=$row['location'];
                    $productid=$row['productid'];
                    $total=$row['total'];
                    $phone=$row['phone'];
                   
                    
                  }
                   $t=$total+200;
$quez="SELECT pname  from products where productid='$d' ";
// mysqli_query($conn,$query)or die("cant connect to database");
$result=mysqli_query($conn,$quez) or die('couldnt querry'.mysqli_error($conn));
            while ($row=mysqli_fetch_array ($result)){
              $pname=$row['pname'];
              // $phone=$row['phone'];
              

             
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


.containers{
  height: 800px !important;
  
}

.containers .loginn{
  width: 100%;
  height: 95%;
  /*background-color: white;*/
   /*background-color:#7FAAFF;*/
 float: left;
  margin-left: 0%;
  margin-top: 20px;
  position: inherit;
}
.loginn .print{
  height: 100%;
  width: 60%;
  /*position: inherit;*/
  margin-top: 0px;
  margin-left:20%;
  background-color: white;
}
.print h6{
  float: right;
  font-size: 16px;
  margin-right: 100px;
  padding-top: 20px;
}
.print h4{
  float: left;
  font-size: 16px;
  margin-left: 100px;
  padding-top: 20px;
  color:  #000033;
}
.print .form{
  clear: both;
  margin-left: 20px;
}
 .form .llabel{
  /*padding-left: 20%;*/
  margin-left: 20%;
  position: absolute;
  color: #0000FF;
  overflow: hidden;
}
h5{
  color: #FF7F2A;
}
h3{
  /*color: red;*/
  padding-left: 100px;
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
                        <a href="logout.php" id="but" class="btn btn-default">LogOut</a>
                         <a href="signup.php" id="but" class="btn btn-default">SignUp</a>
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
     <div id="pones" class="containers">
   
           

           <div class="loginn">
              <div class="print">
                <span> <h4> Date :<?php echo $date; ?></h4> <h4>Product Voucher</h4><H6><a href="">Print</a></H6></span>
                  <form method="POST" class="form">
                    <hr>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>  <label class="llabel"><?php echo $ppname ; ?></label>
                                  <hr>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label> <label class="llabel"><?php echo $email ; ?></label>
                                    <hr>
                                </div>
                                <div class="form-group">
                                 <span> <label for="exampleInputPassword1">Location :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><label class="llabel"><?php echo $location; ?></label></span>
                                    <hr>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">PhoneNo : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><label class="llabel">0<?php echo $phone ?></label>
                                    <hr>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Product Name :</label><label class="llabel"><?php echo $pname ?></label>
                                  <hr>
                                </div>
                                 <div class="form-group">
                                  <label for="exampleInputPassword1">ProductNo :&nbsp&nbsp&nbsp&nbsp&nbsp</label> <label class="llabel">MoTch<?php echo $productid ; ?></label>
                                  <hr>
                                </div>
                                
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Cost :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label> <label class="llabel">Ksh : <?php echo $dprice; ?></label>
                                  <hr>
                                   <div class="form-group">
                                  <label for="exampleInputPassword1">Transport Cost:</label><label class="llabel">Ksh : 200</label>
                                  <hr>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Total :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><label class="llabel">Ksh : <?php echo $t ?></label>
                                 
                                  <hr>
                                </div>
                                
                               
                              </form>
                              <h5>Payment Is Cash On delevery.</h5>
                              <h5>This product will be delivered in 3 days. More details in your email.</h5>
                              <h3>Thank you For Shopping with Us. Welcome Again</h3>

              </div>

             </div>
          </div>
          </div>
        
   
      
      <!-- <div class=""></div> -->
      
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