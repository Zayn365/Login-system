<?php

session_start();
session_unset();
session_destroy();


// Go back to the front page
//header ('location: ../index1.php?error=none');
die('CALL');