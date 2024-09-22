<html>
<head><title>
get cookie example
</title></head>
<body>
<?php
if(isset($_COOKIE["user"]))
{
    echo "<h1>welcome " . $_COOKIE["user"] . "</h1>";
}
else
echo "sorry no user name available in cookies";
?>
</body>

</html>
