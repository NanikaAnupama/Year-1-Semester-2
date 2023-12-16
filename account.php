<?php
include 'connect.php';
session_start();
$buyerId = $_SESSION['buyer_id'];
?>

<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>SuperBid</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" href="admin.css"> -->

    <style>
     h2{
        margin-top:25px;
        padding-left:20px;
        font-size:54px;
      }

    .submit{

    background-color: #555555; 
    border: none;
    color: white;
    padding: 11px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 4px;
    margin-top:5px;
    margin-bottom:5px;
    cursor: pointer;
    width:20%;
    position:absolute;
    left:68%;
     
    
    
}
.submit a{
font-family: Arial, Helvetica, sans-serif;
text-decoration-line: none;
color:white;
font-weight: 500;
}

.submit:hover{
background-color:#088178;
transition:0.6s;
color:white;
cursor:pointer;
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

table, th, td{
  border: 2px solid black;
  margin-top: 10px;
}

  #user {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      /* width: 50%; */
      margin-left: auto;
      margin-right: auto;
      width: 80%;
      margin-top: 70px;
      margin-bottom: 120px;
    }

#user td, #user th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#user tr:nth-child(even){background-color: #f2f2f2;}

#user tr:hover {background-color: #ddd;}

#user th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
    </style>
</head>
<body>
    <section id="header">
        
        <h1 class="heading"><a href="index.html">SuperBid</a></h1>
    <ul id="bar">
        <li><a  class="bar12" href="buyer.php">Home</a></li>
        <li><a class="bar12" href="auctions.php">Auctions</a></li>
        <li><a class="bar12" href="about.html">About</a></li>
        <li><a class="bar12" href="help.html">Help</a></li>
        <li><a style="color:#088178;" class="bar12" href="account.php">My Account</a></li>
        <li><a  class="bar12" href="mybid.php">My Bids</a></li>
        <form action="logOff.php" method="post">
        <input type="submit" class="bar12" name="logoff" value="Log Off" class="bar12"/>
        </form>
</ul>
    
    </section>
        <h2>Account Details</h2>
    <?php

    $sql = "select * from buyer where BID = $buyerId";
    $result = mysqli_query($con,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
        $id = $row['BID'];
        $name = $row['Username'];
        $address = $row['Address'];
        $email = $row['Email'];
        $password = $row['Password'];

        echo '<table width = 75% id = "user" align="center">
        <thead>
          <tr>
            <th scope="col">Username</th>
            <td>'.$name.'</td></tr>
            <tr>
            <th scope="col">Address</Address></th>
            <td>'.$address.'</td></tr>
            <tr>
            <th scope="col">Eamil</th>
            <td>'.$email.'</td></tr>
            <tr>
            <th scope="col">Password</th>
            <td>'.$password.'</td></tr>
        </thead>
        <tbody><br><br>
        <button class = "submit" ><a href="updatebyBuyer.php? updateid='.$id.'">Update</a></button>';
    }
    }
    ?>


</tbody>
</table>
    <!-- Footer section -->

<footer class="section-p1">
    <div class="col">
        <h4>Contact</h4>
        <p><strong>Address: </strong> 146/6 Medhanada Mawatha,Pahala Bomiriya,Kaduwela </p>
        <p><strong>Phone: </strong> +94 776926567</p>
        <p><strong>Hours: </strong> 9:00 - 20:00,Mon - Sat</p>
    </div>

    <div class="col">
        <h4>About</h4>
        <a href="about.html">About us</a>
        <a href="catergorise.html">Catergories</a>
        <a href="#">Terms [& Conditions</a>
        <a href="#">Contact us</a>
    </div>

    <div class="col">
        <h4>My Account</h4>
        <a href="signin.html">Sign In</a>
        <a href="#">View cart</a>
        <a href="buying.html">Buying</a>
        <a href="selling.html">Selling</a>
        <a href="help.html">Help</a>
    </div>

   

    <div class="copyright">
        <p>@2023,Tech2 etc - HTML CSS Ecommerce Template</p>
    </div>
</footer>

</body>
</html> 