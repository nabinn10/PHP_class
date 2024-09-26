<html>
<head><title>
set cookie example
</title></head>
<body>
<?php
$username = "Nabin Poudel";
setcookie("user",$username,time()+24*60*60);
echo "cookie is set with cookie name 'user' ";
echo "<h1>welcome " . $_COOKIE["user"] . "</h1>";
?>
</body>
</html>