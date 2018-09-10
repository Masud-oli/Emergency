
<?php
ob_start();
unset($_SESSION['bn']);
$_SESSION['en']="English Languae";
$goback=$_SERVER['HTTP_REFERER'];
header("location:$goback");
ob_end_flush();
?>