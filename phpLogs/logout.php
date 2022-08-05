<?php

//destroy all session and goto login page
session_start();
session_unset();
session_destroy();
header('location:../login.php');
echo    "done";


?>