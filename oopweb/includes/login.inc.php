<?php

// instantiate controller class
include "../classes/Connect.class.php";
include "../classes/Login.class.php";
include "../classes/LoginCtrl.class.php";



//    First we Grab the DATA
if(isset($_POST['btn_lgn'])) {
    $name = $_POST['lgn_email'];
    $pwd = $_POST['lgn_pwd'];

//    echo "N -> $name, pwd -> $pwd";

// Here is the main object where all the data is called on!
//    echo "<pre>, print_r($name, ) ,</pre>"
    $login = new LoginCtrl($name, $pwd);
    $login->LoginUser();
// Go back to the front page
   return header ('location:../index1.php?error=none');






// running error and handlers




}