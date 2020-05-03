<?php

    include 'conn.php';
    $sql = "INSERT INTO customer (cust_email) VALUES ('".$_POST["email"]."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

?>