<?php
include("conn.php");
  if (isset($_POST['submit'])) {
  $username=mysqli_real_escape_string($conn,(trim($_POST['username'])));
    $email=mysqli_real_escape_string($conn,(trim($_POST['email'])));
    $password=mysqli_real_escape_string($conn,(trim($_POST['password'])));
    $phoneno=mysqli_real_escape_string($conn,(trim($_POST['phoneno'])));
    $confirmpassword=mysqli_real_escape_string($conn,(trim($_POST['confirmpassword'])));
    
    if (($confirmpassword)==($password)) {
      $query=$conn->query("SELECT ( email) from signup where email='".$email."' " );
      if (mysqli_num_rows($query)>0) {
        echo "<script>alert('username already exists please use another one')</script>";
      }
      else  {
      
        $ssql=$conn->query("SELECT (email) from user where email='".$email."'");

        if (mysqli_num_rows($ssql)>0) {
        echo "<script>alert('mail already exists')</script>";
        
        }
        else{
        $sql="INSERT into signup ( email,password,username,phone) VALUES ('".$email."', '".$password."', '".$username."','".$phoneno."') ";
        mysqli_query($conn, $sql) or die ("couldnt query database".mysqli_error($conn));
        // mysqli_close($conn);
        echo "success!";
        header("location:index.php");
        exit();
       echo "<script> alert('you have successfully signed up'); </script>";
        // }
      }
    
   
 

    }}}
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
.containers .login{
  width: 60%;
  height: 800px;
  background-color: white;
 float: left;
  margin-left: 20%;
  margin-top: 5%;
  position: inherit;
}
.login .form{
  
height: 80%;
background-color: white;
width: 60%;
margin-left:  20%;
margin-right :  20%;
margin-bottom :  20%;
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
.but{
  width: 30px;
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
      <li><a href=""><img src="images/phone.png">+25470065211</a></li>/li>
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
          <div class="login">
             <label id="signup" >Sign Up</label><br>
             <label id="psignup">Please enter your details below</label>
             <small id="emailHelp" class="form-text text-muted">Already have an account? <a id="do" href="login.php">Login</a></small> 
             <div class="form">
               
                        <form method="POST">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email" required="">
                                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputUsername1">Username</label>
                                  <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Username" required="">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPhoneNo1">PhoneNo </label>
                                  <input type="number" name="phoneno" class="form-control" id="exampleInputPhoneNo" placeholder="PhoneNumber" required="">*
                                  <small id="emailHelp" class="form-text text-muted">Phone Number should be 10 characters long.</small> 
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">*
                                  <small id="passwordHelp" class="form-text text-muted">Password should be more than 8 characyers long.</small>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword2">ConfirmPassword</label>
                                  <input type="password" name="confirmpassword" class="form-control" id="exampleInputPassword2" placeholder="ConfirmPassword" required="">
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
