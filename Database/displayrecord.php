<?php
$servername = "localhost:3306";
$dbname = "web-tech";
$dbusername = "root";
$dbpw = "";
$conn = new mysqli($servername, $dbusername, $dbpw, $dbname);

if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "Select * from student1 ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
        <th>Sid</th>
        <th>Std_name</th>
        <th>Age </th>
        <th>Phone</th>
        <th>Address </th>
        <th>Action </th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . $row['s_id'] . "</td>
            <td>" . $row['sid_name'] . "</td>
            <td>" . $row['age'] . "</td>
            <td>" . $row['phone'] . "</td>
            <td>" . $row['address'] . "</td>
            <td><a href='editstudent.php?sid=" . $row['s_id'] . "'>edit</a> 
            <a href='deletestudent.php?sid=" . $row['s_id'] . "'>delete</a></td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "<h1>sorry no data to display</h1>";
}
$conn->close();
?>
