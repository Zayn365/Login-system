<?php

// instantiate controller class
include "../classes/Connect.class.php";
include "../classes/Signup.class.php";
include "../classes/SignUpCtrl.class.php";



//    First we Grab the DATA
if(isset($_POST['btn_sign'])) {
    $name = $_POST['name_sign'];
    $email = $_POST['email_sign'];
    $pwd = $_POST['pwd_sign'];
    $repeatPwd = $_POST['repeat_pwd'];
// Here is the main object where all the data is called on!
//    echo "<pre>, print_r($name, ) ,</pre>"
    header ('location:../index1.php?error=none');
    $sign = new SignUpCtrl($name, $email, $pwd, $repeatPwd);
    return $sign->SignUpUser();





// running error and handlers


// Go back to the front page

}