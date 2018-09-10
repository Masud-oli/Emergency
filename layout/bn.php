<?php
unset($_SESSION['en']);
$_SESSION['bn']="Banla language";
$goback=$_SERVER['HTTP_REFERER'];
header("location:$goback");
echo $goback;
ob_end_flush();
?>