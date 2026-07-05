<?php

session_start();

session_destroy();

header("Location: foodie.php");

exit();

?>
