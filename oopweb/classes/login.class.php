<?php
class Login extends Connect
{
    protected function getUsers($name, $pwd)
    {

        $stmt = $this->connect()->prepare('SELECT password from login  WHERE name=? OR email =?');


//        echo "<pre>",print_r($stmt->execute(array($name,$name))->fetchAll(PDO::FETCH_OBJ),1),"</pre>";

        if (!$stmt->execute(array($name,$name))) {
            $stmt = null;
            die('B');
            header("location:../index1.php?error=StmtError");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location:../index1.php?error=UserNotFound");
            exit();
        }
        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkpass = password_verify($pwd, $pwdHashed[0]["password"]);

        if ($checkpass == false) {
            $stmt = null;
            header("location:../index1.php?error=WrongPassword");
            exit();
        }

        if ($checkpass == false) {
            $stmt = null;
            header("location:../index1.php?error=WrongPassword");
            exit();
        } elseif ($checkpass == true) {
            $stmt = $this->connect()->prepare("SELECT * from `login` WHERE name =? OR email =? AND password =?;");
        }

        if (!$stmt->execute(array($name, $name, $pwd))) {
            $stmt = null;
            header("location:../index1.php?error=StmtError");
            exit();
        }
        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location:../index1.php?error=UserNotFound");
            exit();
        }
//        if ($stmt->rowCount() == 0) {
//            $stmt = null;
//            header("location:../index1.php?error=UserNotFound");
//            exit();
//        }
        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION['user_id'] = $user[0]['Id'];
        $_SESSION['user_name'] = $user[0]['name'];



    }
}

