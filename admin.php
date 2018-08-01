<?php
include("conn.php");
  if (isset($_POST['submit'])) {
  $pname=mysqli_real_escape_string($conn,(trim($_POST['names'])));
    $pquantity=mysqli_real_escape_string($conn,(trim($_POST['quantity'])));
    $pprice=mysqli_real_escape_string($conn,(trim($_POST['price'])));
    $dprice=mysqli_real_escape_string($conn,(trim($_POST['dprice'])));
    $description=mysqli_real_escape_string($conn,(trim($_POST['description'])));
    $category=$_POST['category'];
    
  
 $name   =$_FILES['file']['name'];
  $type  =$_FILES['file']['type'];
  $pathh =$_POST['paths'];
    $date=date('Y-m-d G:i:s');
     define ('SITE_ROOT', realpath(dirname('/htdocs/ecommerce/images/phones/')));
   // if($type=='image/jpeg' || $type=='image/png' || $type=='image/gif' || $type=='image/pjpeg')
   // {
    $up=move_uploaded_file($_FILES['file']['tmp_name'],dirname($_SERVER['DOCUMENT_ROOT']).'/htdocs/ecommerce/images/phones/'.$name);
    
      $sql="INSERT into products(pname,pquantity,pprice,pricesale,pdescription,categoryid,pimage,pimagepath,dateposted ) VALUES ('".$pname."', '".$pquantity."','".$pprice."','".$dprice."','".$description."','".$category."','".$name."','".$pathh."','".$date."') ";
      // $sql="INSERT into products(pimage,pimagepath) values ('".$name."','".$pathh."')";
       mysqli_query($conn, $sql) or die ("couldnt query database".mysqli_error($conn));
      

       
       

         if ($sql && $up) {
           
        header("location:index.php");
          echo "<script> alert('you have vbidjkscsuccessfully saved up'); </script>";
           exit();
      }
      else{
       
       
    
       
        
       
       echo "<script> alert('you have successfully saved up'); </script>";
        }
       
     
    }
   
 

    
    ?>
<!DOCTYPE html>
<html>
<head>
  <title>MobiTech</title>
   <link rel="stylesheet" type="text/css" href="style.css"> 
   <script type="text/javascript" src="validate.js"></script>
  <link rel="stylesheet" type="text/css" href="bootstrap.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.containers .loginnn{
  width: 60%;
  height: 820px;
  background-color: white;
   /*background-colo r:#7FAAFF;*/

 float: left;
  margin-left: 20%;
  margin-top: 5%;
  position: inherit;
}
.loginnn .form{
  
height: 70%;
/*background-color: white;*/
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
      <li class="active"><a href="#">Home</a></li>
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
          <div class="loginnn">
             <label id="signup" >Add A product to the Database</label><br>
             <label id="psignup">Please enter the prducts details below details below</label>
             <div class="form">
               
                        <form method="POST" enctype="multipart/form-data" onsubmit="return validatte()">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" name="names" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ProductName" required="">
                                  <small id="emailHelp" class="form-text text-muted">Input the ProductName.</small>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Quantity</label>
                                  <input type="number" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Quantity" required="">
                                  <!-- <small id="emailHelp" class="form-text text-muted">Input the product Quantity</small> -->
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Price</label>
                                  <input type="number" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Pricel" required="">
                                  <!-- <small id="emailHelp" class="form-text text-muted">input the product price</small> -->
                                </div>
                                 <div class="form-group">
                                  <label for="exampleInputEmail1">Discounted Price</label>
                                  <input type="number" name="dprice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Product Pricel" required="">
                                  <!-- <small id="emailHelp" class="form-text text-muted">input the product price</small> -->
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Image</label>
                                       <input type="file" name="file" class="form-control" class="form-control-file" id="exampleFormControlFile1" required="">  
                                       <!-- <input type="file" name="file" required=""><br> -->
            <!--   <input type="text" name="paths"><br>
<input type="text" name="type"><br>
 -->                                  <div class="form-group">
                                  <label for="exampleFormControlTextarea1"> Product Description</label>
                                  <textarea class="form-control" name="description" 
                                  id="exampleFormControlTextarea1" rows="3" placeholder="Describe your product in not more than 100 words" ></textarea>
                                </div>
                                                             
                                   </div><div class="form-group">
                                  <label for="exampleInputEmail1">Category</label>
                                  <select name="category" class="form-control">
                                        <?php
                                        // include('conn.php');
                                        $query=$conn->query("SELECT * from category");
                                        while($row=$query->fetch_object()){
                                          echo "<option value='0".$row->categoryid."'>".$row->category."</option>" ;
                                        }
                                      ?>
                                    </select>
                                  <small id="emailHelp" class="form-text text-muted">Please select the category Here.</small>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                              </form>

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
