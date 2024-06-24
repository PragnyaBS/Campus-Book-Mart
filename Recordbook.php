<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./recordbook.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Record:Campus Book Mart</title>
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
   .popup {
      width: 400px;
      background: black;
      border-radius: 6px;
      position: absolute;
      top: 0;
      left: 50%;
      transform: translate (-50%, -50%) scale(0.1);
      text-align: center;
      padding: 0 30px 30px;
      color: white;
      visibility: hidden;
      transition: transform 0.4s, top 0.4s;
    }

    .open-popup {
      visibility: visible;
      top: 20%;
      transform: translate (-50%, -50%) scale(1);
    }

    .popup h2 {
      font-size: 38px;
      font-weight: 500;
      margin: 30px 0 10px;
    }

    .popup button {
      width: 100%;
      margin-top: 50px;
      padding: 10px 0;
      background: #6fd649;
      color: #fff;
      border: 0;
      outline: none;
      font-size: 18px;
      border-radius: 4px;
      cursor: pointer;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.2);
    }
   </style>
</head>
<body>
    <div class="first">
        <button class="button">
            <a href="./sign in.html" ><span class="material-symbols-outlined">
                login
            </span>Sign in</a>
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
  <a href="#home">Home</a>
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
    <h1><center>RECORD BOOKS</center></h1>
    <div class="out">
    <form action="insertcart8.php" method="POST">
        <div class="in">
            <img src="./images/phy(record books).jpg">
            <h5><center>Physics Record book</center></h5>
            <p class="ii"><center>₹70</center></p>
            <label for="qty">Quantity:</label><br/>
            <input type="number" min="1" max="100" id="qty" name="qty" value="1"><br/>
            <input type="hidden" name="name" value="Physics record book">
            <input type="hidden" name="price" value="70">
            <p><button type="submit" class="btn" onclick="openPopup()">Add to cart</button>
              <div class="popup" id="popup">
                <h2>Item added! </h2>
                <button type="button" onclick="closePopup()">OK</button>
              </div></p>
        </div>
        <div class="in">
            <img src="./images/chem.jpg">
            <h5><center>Chemistry Record book</center></h5>
            <p class="ii"><center>₹70</center></p>
            <label for="qty">Quantity:</label><br/>
            <input type="number" min="1" max="100" id="qty" name="qty" value="1"><br/>
            <input type="hidden" name="name" value="Chemistry record book">
            <input type="hidden" name="price" value="70">
            <p><button type="submit" class="btn" onclick="openPopup()">Add to cart</button>
              <div class="popup" id="popup">
                <h2>Item added! </h2>
                <button type="button" onclick="closePopup()">OK</button>
              </div></p>
        </div>
        <div class="in">
            <img src="./images/bio.jpg">
            <h5><center>Biology Record book</center></h5>
            <p class="ii"><center>₹70</center></p>
            <label for="qty">Quantity:</label><br/>
            <input type="number" min="1" max="100" id="qty" name="qty" value="1"><br/>
            <input type="hidden" name="name" value="Biology record book">
            <input type="hidden" name="price" value="70">
            <p><button type="submit" class="btn" onclick="openPopup()">Add to cart</button>
              <div class="popup" id="popup">
                <h2>Item added! </h2>
                <button type="button" onclick="closePopup()">OK</button>
              </div></p>
        </div>
        <div class="in">
            <img src="./images/sketch.webp">
            <h5><center>Sketch book</center></h5>
            <p class="ii"><center>₹150</center></p>
            <label for="qty">Quantity:</label><br/>
            <input type="number" min="1" max="100" id="qty" name="qty" value="1"><br/>
            <input type="hidden" name="name" value="Sketch book">
            <input type="hidden" name="price" value="150">
            <p><button type="submit" class="btn" onclick="openPopup()">Add to cart</button>
              <div class="popup" id="popup">
                <h2>Item added! </h2>
                <button type="button" onclick="closePopup()">OK</button>
              </div></p>
        </div>
    </form>
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
    function myFunction() {
     var x = document.getElementById("myTopnav");
     if (x.className === "topnav") {
       x.className += " responsive";
     } else {
       x.className = "topnav";
     }
   }
   </script> 
   <script>
    let popup = document.getElementById("popup");
    function openPopup() {
      popup.classList.add("open-popup");
    }
    function closePopup() {
      popup.classList.remove("open-popup");
    }
  </script>
</body>
</html>