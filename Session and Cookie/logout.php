<html>
<head><title>
get cookie example
</title></head>
<body>
<?php
session_start();
if(isset($_SESSION["username"])||isset($_SESSION["userid"]))
{
   // unset($_SESSION["username"]);
   // unset($_SESSION["userid"]);
    session_destroy();

    header("location:login.php");
}
?>
</body>
</html>