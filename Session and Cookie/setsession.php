<html>
<head><title>
set cookie example
</title></head>
<body>
<?php
if(isset($_REQUEST["btn1"]))
{
$userid = $_REQUEST["userid"];
$username = $_REQUEST["username"];
session_start();
$_SESSION["userid"] = $userid;
$_SESSION["username"] = $username;
echo "session variable is set with name 'userid' and 'username'";
}
?>
</body>
</html>