<?php
    include 'connect.php';
    session_start();

    $sellerId = $_SESSION['seller_id'];
  
?>
<!Doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>SuperBid</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="admin.css">
    <style>
      .submit11{
        background-color: #555555; 
        border: none;
        color: white;
        padding: 11px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 4px;
        margin-top:35px;
        margin-bottom:15px;
        cursor: pointer;
        width:15%;
        position:relative;
        left:10%;
      }

      .submit11 a{
          font-family: Arial, Helvetica, sans-serif;
          text-decoration-line: none;
          color:white;
          font-weight: 500;
      }
      .submit11:hover{
        background-color:#088178;
        transition:0.6s;
        color:white;
        cursor:pointer;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

    </style>
</head>
<body>
    <section id="header">
        
        <h1 class="heading"><a href="index.php">SuperBid</a></h1>
    <ul id="bar">
        <li><a style="color:#088178" class="bar12" href="ItemManagement.php">Item Management</a></li>
    </ul>
    </section>

    <div> 
    <button class = "submit11"><a href = "addItem.php">
    Add Item</a>
    </button></div>

    <table width = 75% id = "user">
  <thead>
    <tr>
      <th scope="col">IID</th>
      <th scope="col">Item</th>
      <th scope="col">Start Price</th>
      <th scope="col">Description</th>
      <th scope="col">Picture</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $selectItemsQuery = "SELECT IID,Name,startPrice,photo,Description
                        FROM item
                        WHERE SID = $sellerId";
    $itemsResult = mysqli_query($con, $selectItemsQuery);
    if($itemsResult){
        while($row = mysqli_fetch_assoc($itemsResult)){
        $id = $row['IID'];
        $name = $row['Name'];
        $price = $row['startPrice'];
        $description = $row['Description'];
        $photo = $row['photo'];


        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$price.'</td>
        <td>'.$description.'</td>
        <td><img src = "data:photo;base64,'.base64_encode($photo).'" style = "width:150px;height:150px;"></td>
        <td><button class = "submit" ><a href="updateItem.php? updateid='.$id.'">Update</a></button>
            <button class = "submit"><a href="deleteItem.php? deleteid='.$id.'">Delete</a></button>
        </td>
      </tr>';
    }
    }else{
        echo "You don't have any items yet.";
    }
    ?>


</tbody>
</table>

</body>

</html> 