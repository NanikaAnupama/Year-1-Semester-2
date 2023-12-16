<?php
include 'connect.php';
?>

<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>SuperBid</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <section id="header">
        
    <h1 class="heading"><a href="index.php">SuperBid</a></h1>
    <ul id="bar">
        <li><a style="color:#088178"  class="bar12" href="admin.php">Buyer Management</a></li>
        <li><a class="bar12" href="sellerManagement.php">Seller Management</a></li>
    </ul>
    </section>

    <div> 
    <button class = "submit"><a href = "addBuyer.php">
    Add Buyer</a>
    </button></div>

    <table width = 75% id = "user" align="center">
  <thead>
    <tr>
      <th scope="col">BID</th>
      <th scope="col">Username</th>
      <th scope="col">Address</Address></th>
      <th scope="col">Eamil</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $sql = "select * from buyer";
    $result = mysqli_query($con,$sql);
    if($result){
        while($row = mysqli_fetch_assoc($result)){
        $id = $row['BID'];
        $name = $row['Username'];
        $address = $row['Address'];
        $email = $row['Email'];
        $password = $row['Password'];

        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$address.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td><button class = "submit" ><a href="updateBuyer.php? updateid='.$id.'">Update</a></button>
            <button class = "submit"><a href="deleteBuyer.php? deleteid='.$id.'">Delete</a></button>
        </td>
      </tr>';
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