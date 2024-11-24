<?php

    $search = $_POST['name'];
    // echo "You have searched for: " . htmlspecialchars($search);

    // db connection

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "liquorvault";

    $conn = new mysqli($servername, $username, $password, $dbname);



    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE name LIKE '%$search%' ORDER BY name";

    $result = mysqli_query($conn, $sql);
    // echo name

     $data = "";
     if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data .= "<p>" . $row['name'] . "</p>";
        }
     } else {
         $data .= "<h4>No Results Found</h4>";
     }
     

     echo $data;


    $conn->close();


?>
