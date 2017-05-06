<?php
session_start();
session_destroy();
setcookie("email", "", time()-99999999999999999999999999999999999999999999999999999999999999999999999999999999999999990);
header("Location: index.php");
?>