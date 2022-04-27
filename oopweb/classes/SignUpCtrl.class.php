<?php

class SignUpCtrl extends Signup
{

    private $name = '';
    private $email = '';
    private $pwd = '';
    private $repeatPwd = '';

    public function __construct($name, $email, $pwd, $repeatPwd)
    {
        $this->name = $name ;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->repeatPwd = $repeatPwd ;
    }

    private function emptyData()
    {
        if (empty($this->name) || empty($this->email) || empty($this->pwd) || empty($this->repeatPwd))
            return false;
        else
            return true;
    }

    private function emptyName()
    {
//        if (!preg_match("/^[a-zA-Z0-9]*$/", $this->name))
        if (empty($this->name))
            return false;
        else
            return true;
    }

//    private function emptyEmail()
//    {
//        if (filter_var($this->email, FILTER_VALIDATE_EMAIL))
//            return true;
//        else
//            return false;
//    }

    private function NoMatchPwd()
    {
        if ($this->pwd !== $this->repeatPwd)
            return false;
        else
            return true;
    }


    private function NoMatchEmail()
    {
        if (!$this->checkUser($this->name, $this->email))
           return false;
        else
            return true;
    }

    public function SignUpUser()
    {
//        echo "Running";

        if ($this->emptyData() == false) {
            header("location:../index1.php?error=emptyInput!!");
            exit();
        }

        if ($this->emptyName() == false) {
            header("location:../index1.php?error=emptyName!!");
            exit();
        }

        if ($this->NoMatchPwd() == false) {
            header("location:../index1.php?error=emptyInput!!");
            exit();
        }

        if ($this->NoMatchEmail() == false) {
            header("location:../index1.php?error=emptyInput!!");
            exit();
        }


        $this->setUsers($this->name, $this->email, $this->pwd);
    }


}


