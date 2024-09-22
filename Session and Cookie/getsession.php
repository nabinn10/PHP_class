<html>
<head><title>
get cookie example
</title></head>
<body>
<?php
session_start();
if(isset($_SESSION["userid"]) && isset($_SESSION["username"]))
{
echo "<h1>welcome " . $_SESSION["username"] . " your userid is " . $_SESSION["userid"]. "</h1>";
echo "<br><a href='logout.php' > logout </a>";
}
else
{
 header("location:login.php");
}
?>
</body>
</html>