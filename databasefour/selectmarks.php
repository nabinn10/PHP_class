<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lict";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Correct query to select data from marks using JOIN with where condition
$qry = "SELECT student.name AS student_name, subjects.name AS subject_name, marks.marks_obtained, subjects.full_marks
        FROM marks
        JOIN student ON marks.std_id = student.id
        JOIN subjects ON marks.sub_id = subjects.id
        WHERE student.id = 1";

//average marks of a aparticular syudent
$qry2 = "SELECT student.name AS student_name, AVG(marks.marks_obtained) AS average_marks
        FROM marks
        JOIN student ON marks.std_id = student.id
        WHERE student.id = 1";





// Check if there are any results
if ($result->num_rows > 0) {
    // Output data of each row

    //write output in tabluar format
    echo "<table border='1'>";
    echo "<tr><th>Student Name</th><th>Subject Name</th><th>Marks Obtained</th><th>Full Marks</th></tr>";   
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["student_name"]. "</td><td>" . $row["subject_name"]. "</td><td>" . $row["marks_obtained"]. "</td><td>" . $row["full_marks"]. "</td></tr>";
    }
    echo "</table>";
   
} else {
    echo "0 results";
}


// Close connection
$conn->close();
?>
