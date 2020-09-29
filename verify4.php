<html>
<body>

<?php
$str = $_POST["inputPassword4"];

if (sha1($str) == "da39a3ee5e6b4b0d3255bfef95601890afd80709")
{
    //echo (sha1($str));
    header('Location: level5.html');
    exit;
}
else
{
    //echo (sha1($str));
    header('Location: level4.html');
    exit;
}
?>

</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: Viraj
 * Date: 7/26/2018
 * Time: 9:21 PM
 */