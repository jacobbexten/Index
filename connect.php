﻿<?php
//webdev database
    $servername = "webdev.cs.umt.edu";
    $username = "jb110725";
    //$password
    $database = "jb110725";


//create connection
    $conn = new mysqli($servername, $username, $password, $database);
//check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

//select query
    $sql = "SELECT product_id, product_name, product_des, product_price FROM Products";


    $result = $conn->query($sql);

//create table in PHP to display rows
    if ($result->num_rows > 0) {
        echo "<table>
    <tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th></tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "
    <tr><td>".$row["product_id"]."</td><td>".$row["product_name"]."</td><td>".$row["product_des"]."</td><td>".$row["product_price"]."</td></tr>";
    }
    echo "
</table>";
    }
    else {
        echo "0 results";
    }

    $num_results = mysqli_num_rows($result);
    echo '<p>Number of rows: '.$num_results.'</p>';


?>
