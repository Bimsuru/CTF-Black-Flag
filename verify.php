<html>
<body>

<?php
$str = $_POST["inputPassword2"];

if (sha1($str) == "d5244a331aad290f924ed5ed8c070d65d2e0633e")
{
    header('Location: dashboard.php');
    exit;
}
else
{
    header('Location: indexerror.html');
    exit;
}
?>

</body>
</html>