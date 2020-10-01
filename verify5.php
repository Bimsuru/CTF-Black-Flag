<html>
<body>
<?php

$str = $_POST["inputPassword5"];

if (sha1($str) == "test")
{
    header('Location: http://localhost/ctf/level6.html');
    exit;
}
else
{
    header('Location: http://localhost/ctf/level5.html');
    exit;


}

?>

</body>
</html>
