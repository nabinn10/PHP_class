<?php
if (isset($_POST["name"])) {
    $sname = $_POST["name"];
    $sphone = $_POST["phone"];
    $saddress = $_POST["saddress"];
    $sage = $_POST["age"];
    $scourse = $_POST["course"];

    $servername = "localhost:3306";
    $dbname = "web-tech";
    $dbusername = "root";
    $dbpw = "";

    $conn = new mysqli($servername, $dbusername, $dbpw, $dbname);
    if ($conn->connect_errno) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = ("INSERT INTO student1 (sid_name, course_id, phone, age, address) VALUES ('$sname','$scourse','$sphone','$sage','$saddress')");
    $result = $conn->query($sql);
    if ($result == true) {
        echo "Data entered";
    } else {
        echo "Data not entered";
    }
    $conn->close();
} else {
    header("location:form.php");
}
?>