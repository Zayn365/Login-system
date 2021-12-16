<?php

session_start();
session_unset();
session_destroy();


// Go back to the front page
return header ('location: ../index.php');
//die('CALL');