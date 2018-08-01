<?php 
 session_start();
 include("conn.php");
 $d= $_SESSION['productid'];
if (!isset($_SESSION['id'])) {
  header('location:login.php');
  exit();
}
$id=$_SESSION['id'];

$query="SELECT email, phone from signup where id='$id' ";
// mysqli_query($conn,$query)or die("cant connect to database");
$result=mysqli_query($conn,$query) or die('couldnt querry'.mysqli_error($conn));
            while ($row=mysqli_fetch_array ($result)){
              $email=$row['email'];
              $phone=$row['phone'];
              

             
            }

                                   
          
                    $quez=("SELECT  pname,pprice,pricesale FROM products where productid=$d");
                  $resu=mysqli_query($conn,$quez) or die('couldnt querry'.mysqli_error($conn));
                  while ($row=mysqli_fetch_array ($resu)){
                    $pname=$row['pname'];
                    $pprice=$row['pprice'];
                    // $pquantity=$row['pquantity'];
                    $pricesale=$row['pricesale'];
                    
                  }
                 
               
                      $a=$pprice-$pricesale;
                      // for($i=1;$i<=$pquantity;$i++){
                       $i=1;
                       $p=$pricesale*$i ;
                       $total=$p+200;
                      
                  
                  
                  


?>
<?php

if (isset($_POST['submit'])) {
  $name=mysqli_real_escape_string($conn,(trim($_POST['names'])));
    $email=mysqli_real_escape_string($conn,(trim($_POST['email'])));
  
    // $dprice=mysqli_real_escape_string($conn,(trim($_POST['ddprice'])));
    // $total=mysqli_real_escape_string($conn,(trim($_POST['total'])));
     $date=date('Y-m-d G:i:s');
     $category=$_POST['category'];

 $sql="INSERT into purchases  ( cemail,datep,dprice,ppname,productid,total,location) VALUES ('".$email."','".$date."', '".$pprice."', '".$name."','".$d."','".$p."','".$category."') ";
        mysqli_query($conn, $sql) or die ("couldnt query database".mysqli_error($conn));
        // mysqli_close($conn);

         $ssql="UPDATE  products set pquantity=pquantity-1 where productid=$d  ";
        mysqli_query($conn, $ssql) or die ("couldnt query database".mysqli_error($conn));
        mysqli_close($conn);
        if($sql && $ssql){
        header("location:print.php");
        exit();
       echo "<script> alert('you have successfully signed up'); </script>";
        }
      
    
        else{
       echo "<script> alert('query Unfulfilled signed up'); </script>";
        }
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

.containers .proceed{
  height: 100%;
  width: 100%;
  background-color:#7FAAFF;
}
.proceed .proceeda{
  float: left;
  height: 85%;
  width: 50%;
  background-color: ;
}
.proceed .proceedb{
  float: right;
  height: 85%;
  width: 50%;
  background-color: ;
}

.proceeda .address{
  height: 80%;
  background-color: ;
  margin:5%;
  margin-left: 15%;
  margin-right: 10%;
}
.proceedb .check{
  height: 80%;
  background-color: ;
  margin:5%;
}
.proceed .sure{
  height: 20%;
  background-color: ;
}
.sure button{
margin-left: 45%;
}
.check h3{
  /*padding-left: 40px;
  padding-right: 40px;
*/
padding: 40px;
}
.check span{
  padding-right: 40px;
  padding-left: 40px;

}
#sub{
  margin-left: 65%;
  width: 200px;
  height: 60px;
  margin-top: 60px;
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
      <!-- <li><a href=""><img src="images/phone.png">020100200</a></li> -->
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
   
          <div class="proceed">
            <div class="proceeda">
              <div class="address">

                <h3>Provide your Details for Delivery</h3>
                       <form method="POST" enctype="multipart/form-data" onsubmit="return validatte()">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" name="names" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required="">
                                  <small id="emailHelp" class="form-text text-muted">Input your Name.</small>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email Address</label>
                                  <input type="Email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="<?php echo  $email; ?>" required="">
                                  <!-- <small id="emailHelp" class="form-text text-muted">Input the product Quantity</small> -->
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Phone Number</label>
                                  <input type="number" name="phoneno" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone Number"  value="0<?php echo  $phone; ?>" required="">
                                  <!-- <small id="emailHelp" class="form-text text-muted">input the product price</small> -->
                                </div>
                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Location</label>
                                  <select name="category" class="form-control">
                                          <OPTION></OPTION>
                                          <OPTION>Nyayo Zone(Common Room)</OPTION>
                                          <OPTION>Western Zone(Western Mess)</OPTION>
                                          <OPTION>Shopping Center</OPTION>
                                          <OPTION>OML Outlet</OPTION>
                                          <OPTION>Main Gate</OPTION>

                                  </select>
                                </div>
                                
        
                                 <!--  <div class="form-group">
                                  <label for="exampleFormControlTextarea1"> Address</label>
                                  <textarea class="form-control" name="description" 
                                  id="exampleFormControlTextarea1" rows="3" placeholder="Describe your Address in not more than 100 words" ></textarea>
                                </div> -->
                                                             
                                  
                                  
                               
                                <button type="submit" name="submit" id="sub" class="btn btn-primary">Complete Purchase</button>
                              </form>
                              
              </div>
              
            </div>

            <div class="proceedb">
               <div class="check">
                         <h3>Product Details</h3> 
                         <form id="tid">
                        <table class="table">

                                                 
                            <thead class="bg-warning">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Price</th>
                              
                              </tr>
                            </thead>
                            <tbody>
                               <tr>
                          <th scope="row">1</th>
                          <td><?php echo $pname; ?></td>
                          <td ><?php echo $i; ?></td>
                          <td ><?php echo $a; ?></td>
                          <td name="ddprice"><?php echo $p; ?></td>
                          <td></td>
                        </tr>

      </tr>
         <tr>
                          <th scope="row"></th>
                          <td></td>
                          <td ></td>
                          <td >Transport Cost:</td>
                          <td name="ddprice">200</td>
                          <td></td>
                        </tr>
     <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td class="bg-warning">Total :</td>
      <td class="bg-warning"><?php echo $total; ?></td>
      
    </tr>
  </tbody>
</table>

</form>

                                                 
                                  
                               
                             
               </div>
            </div>

            <div class="sure">
              <!-- <button ><a href=""  id="but" class="btn btn-primary">Complete Purchase</a></button> -->
            </div>
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