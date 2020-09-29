<html>
<body>

<?php
$str = $_POST["inputPassword2"];

if (sha1($str) == "37787fb756576b5af6147042abf25811f3f23ca0")
{
    header('Location: level4.html');
   
}
else
{
    header('Location: level3.html');
    exit;
}
?>

</body>
</html>