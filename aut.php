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
  height: 36%;
  width: 90%;
  /*background-color: red;*/
  margin-left: 5%;
}
.navibar .pone{
  height: 60%;
  margin: 2%;
  size: fixed
  width: 20%;
  background-color: #55FF55;
  /*background-color: red;*/
  display: inline-block;
}
.pone .image img{
/*background-size: cover;*/
height: 250px;
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
                        <a href="login.php" id="but" class="btn btn-default">Login</a>
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
    <!-- <div id="pones" class="containers"> -->
    <div class="nyayo">
       
       

       <div class="navibar">
          <section class="pone" id="full">
            <div class="image" >

              <?php 
               // $conn=mysql_connect('localhost','root','kiprotichh', 'default');
              include('conn.php');
    // mysql_select_db('default');
 $pid=5;
$query=("SELECT  productid,pname,pimage,categoryid,pprice,pricesale,pdescription,pquantity,pname FROM products where categoryid='1' ORDER BY productid DESC LIMIT $pid");
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
 }
 

?> 


<img src="images/phones/<?php echo $image; ?>">
   </div>
  
  



              <!-- <img src="images/phones/tec4.jpg"> -->
           
            <h3><?php echo $pname; ?> (<?php echo $pquantity ?>) <ins> ksh <?php echo $pricesale; ?></ins><br> <del>Ksh <?php echo $pprice; ?></del></h3>
            <button type="button" class="btn btn-dark"><a href="login.php">Buy Now</a></button>
          </section>
         

                     
       
       </div>
      
    
      </div>
       <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
      <div class=""></div>
      <div class="footer">
        <div class="help">
        <section class="frequent">
            
              <ul>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
              </ul>
                  </section>
                    </div>
           <div class="help">
         <section class="frequent">
           
               <ul>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
              </ul>
           
        </section>
         </div>
         <div class="help">
            <section class="frequent">
               <ul>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
              </ul>
            
        </section>
        </div>
        <div class="help">
            <section class="frequent">
               <ul>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
                <li><a href="">Contact UsD</a></li>
              </ul>
            
        </section>
        </div>
        <div class="conc">
          <p>created by Daisy <br>cCopy Right @2007</p>
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