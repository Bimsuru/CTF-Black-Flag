<html>
<body>

<?php
$str = $_POST["flag_unvalidated"];

if (sha1($str) == "e41218a880ccfe98633d56987f1fc2c13e5b0568")
{
    header('Location: level2.html');
    exit;
}
else
{
    header('Location: level1.html');
    exit;
}
?>

</body>
</html><?php
/**
 * Created by PhpStorm.
 * User: Pavithra
 * Date: 7/26/2018
 * Time: 9:21 PM
 */