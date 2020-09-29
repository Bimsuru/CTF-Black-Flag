<html>
<body>

<?php
$str = $_POST["inputPassword2"];

if (sha1($str) == "d494a21f7281d6300a76feadce1d7e1462b7dc0c")
{
    header('Location: level3.html');
    exit;
}
else
{
    header('Location: level2.html');
    exit;
}
?>

</body>
</html>