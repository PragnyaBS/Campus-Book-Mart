<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>CART</title>
    <style>
        body {margin:0;font-family:Arial}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 17px;    
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

.dropdown:hover .dropdown-content {
  display: block;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
.mySlides {display:none;}
*{
    box-sizing: border-box;
}
.first{
    width: 100%;
    height:35px;
    background-color: azure;
    margin-bottom: 0%;

}
.button{
    text-decoration: none;
    text-align: center;
    float: right;
    background-color: azure;
    color: black;
    display: inline-block;
    border: 1%;
    margin-right: 2%;
}
.sec{
    background-color: blanchedalmond;
}
input[type=search]{
    border: 1.5px solid black;
    margin-right: 0%;
}
.sec2{
    float: right;
}
.third{
    background-color: lightblue;
}
.t1{
    background-color: lightblue;
    border: 2px solid lightblue;
    margin-left: 0%;
    height: 40px;
}
.t1:hover{
    background-color: lightgreen;
}
marquee{
    background-color: yellow;
    height: 25px;
}
.f{
    height: 700px;
    background-image:url("./images/n2.jpg");
    background-attachment:fixed ;
    background-size: cover;
    background-repeat: no-repeat;
}

.in{
    float: left;
    width: 20%;
    border: 2px solid white;
    margin-top: 10%;
    margin-bottom: 10%;
    margin-left:3% ;
    margin-right: 2%;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.out:after{
    content: "";
    display: table;
    clear: both;
}
.column{
    float:left;
    width: 33.3%;
    background-color: black;
    color: white;
}
.row:after{
    content: "";
    display: table;
    clear: both;
}
img{
    position: relative;
    width:100%;
    height:200px;
}
.in a{
    text-decoration: none;
    color: black;
}
.column a{
    text-decoration: none;
    color: white;
}
.column a:hover{
    color: yellow;
}
.first a{
    text-decoration: none;
    color: black;
}
@media screen and max-width(600px) {
    .first{
        width:100%;
    }
    .column{
        width: 100%;
    }
    .in{
        width: 100%;
    }
}
table{
  width: 100%;
  border: 1px solid black;
}
th,td{
  border: 1px solid black;
}
.hello{
  height: 300px;
}
.btn-warning{
  border: 1px solid black;
  color: black;
  background-color: green;
  border-radius: 10px;
}
.btn-danger{
  border: 1px solid black;
  color: black;
  background-color: red;
  border-radius: 10px;
}
.total{
  border:5px solid black;
  width: 30%;
  margin-left: 70%;
  margin-bottom: 5%;
  background-color: peachpuff;
}
.pay{
  width: 50%;
  background-color: black;
  color: white;
  cursor: pointer;
  border: 3px double white;
  margin-bottom: 2%;
}

       </style>
</head>
<body>
    <div class="first">
        <button class="button">
            <a href="./signup.html" ><span class="material-symbols-outlined">
                login
            </span>Sign Up</a>
                </button>
        <button class="button">
    <a href="./login.html" ><span class="material-symbols-outlined">
        login
    </span>Log in</a>
        </button>
</div>
    <div class="sec">
        <h4><center>CAMPUS BOOK MART</center> </h4>
        <a href="./viewcart.php" class="sec2"><span class="material-symbols-outlined">shopping_cart</span></a>
        <form class="sec1">
       <center><input type="search" placeholder="Search" class="material-symbols-outlined"> 
      </center> 
    </form>
    </div>
    <div class="topnav" id="myTopnav">
  <a href="./index.html" >Home</a>
  <div class="dropdown">
    <button class="dropbtn">Stationaries
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="./book.html">Books</a>
      <a href="./penpencil.php">Pen/Pencil</a>
      <a href="./calculator.php">Calculator</a>
      <a href="./others.php">Others</a>
    </div>
  </div> 
  <a href="#contact">Privacy Policy</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
   <marquee>Your search for quality books and stationaries ends here..</marquee>

<h2><center>Your Cart Products</center></h2>
<div class="hello">
<table>
    <thead>
        <tr>
            <th>Sno</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $bill=0;
        $sno=1;
        $total=0;
        foreach($_SESSION as $products){
            $p=0;
            $q=0;
            
            echo "<tr>";
                echo "<td>".($sno++)."</td>";
                echo "<form action='./editcart.php' method='post'>";
                foreach($products as $key => $value){
                    if($key == 2){
                        echo "<td><input type='text' name='name$key' class='form-control' value='".$value."'</td>";
                        $q=$value;
                    }else if($key == 1){
                      echo "<input type='hidden' name='name$key' value='".$value."'>";
                        echo "<td>".$value."</td>";
                        $p=$value;
                    }else if($key == 0){
                      echo "<input type='hidden' name='name$key' value='".$value."'>";
                        echo "<td>".$value."</td>";
                    }
                }
               
            $bill = ($q * $p);
            echo "<td>".($bill)."</td>";
            $total=($total+$bill);
            echo "<td><input type='submit' name='event' value='Update' class='btn-warning'></td>";
            echo "<td><input type='submit' name='event' value='Delete' class='btn-danger'></td>";
            echo "</form>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</div>
<div class="total">
  <center><strong><h2>Total price:<span><?php echo $total;?></span></h2></strong></center>
  <center><a href="./payment.html"><button class="pay">Pay</button></a></center>
</div>

   <div class="row">
  <div class="column">
      <h5>INFORMATIONS</h5>
      <a href="./privacypolicy.html"><h6>Privacy Policy</h6></a>
      <a href="./conditions.html"><h6>Conditions of Use</h6></a>
      <a href="./contact.html"><h6>Contact Us</h6></a>
  </div>
  <div class="column">
      <h5>MY ACCOUNT</h5>
      <h6>Order History</h6>
      <a href="./changepassword.html"><h6>Change Password</h6></a>
     <a href="./signup.html"><h6>Create Account</h6></a>
  </div>
  <div class="column">
      <h5>CUSTOMER CARE</h5>
      <a href="./brands.html"><h6>Brands</h6></a>
      <h6>Resellers</h6>
      <a href="./support.html"><h6>Support Center Helpdisk</h6></a>
  </div>
 </div>

   <script>
    var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }

    </script>    
</body>
</html>