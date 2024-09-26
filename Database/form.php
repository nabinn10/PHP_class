<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <form action="databaseconnect.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br><br>
        
        <label for="saddress">Address:</label>
        <input type="text" id="saddress" name="saddress" required><br><br>
        
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="course">Course:</label>
        <select name="course" id="course">
            <option value="1">BCA</option>
            <option value="2">BIM</option>
        </select>
        <br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
