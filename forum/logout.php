<?php

session_start();
session_destroy();
header("location:/portal/forum/index.php");

?>