<?php
session_destroy();
setcookie(session_name(), session_id(), time()-3600);
header("Location: index.php");
?>