<?php

//die('*****');
class LoginCtrl extends Login
{

    private $name = '';
    private $pwd = '';

    public function __construct($name,$pwd)
    {
//        echo "$name-> name $pwd-> pwd";
//        echo "<br>";
//        die('ZAIB');
        $this->name = $name;
        $this->pwd = $pwd;
    }
    private function emptyData()
    {
        if (empty($this->name) || empty($this->pwd))
            return false;
        else
            return true;
    }
    public function LoginUser()
    {
        echo "Running";

        if ($this->emptyData() == false) {
            header("location:../index.php?error=emptyInput!!");
            exit();
        }

        $this->getUsers($this->name, $this->pwd);
    }

}

