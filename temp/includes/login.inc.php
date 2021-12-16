<?php

// instantiate controller class
//include "http://random.hyperphp.com/classes/Connect.class.php";
//include "http://random.hyperphp.com/classes/Login.class.php";
//include "http://random.hyperphp.com/htdocs/classes/LoginCtrl.class.php";
//Connect


class Connect
{
    private $host = "sql202.byetcluster.com";
    private $username = "hp_30597398";
    private $password = "12345678";
    private $db = "hp_30597398_ooplogin";

    function connect()
    {
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}


//    First we Grab the DATA
if(isset($_POST['btn_lgn'])) {
    $name = $_POST['lgn_email'];
    $pwd = $_POST['lgn_pwd'];


    // Login
    class Login extends Connect
    {
       function getUsers($name, $pwd)
        {

            $stmt = $this->connect()->prepare('SELECT password from `login`  WHERE name=? OR email =?');


//        echo "<pre>",print_r($stmt->execute(array($name,$name))->fetchAll(PDO::FETCH_OBJ),1),"</pre>";

            if (!$stmt->execute(array($name, $name))) {
                $stmt = null;
//            die('B');
                header("location:../index.php?error=StmtError");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location:../index.php?error=UserNotFound");
                exit();
            }
            $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkpass = password_verify($pwd, $pwdHashed[0]["password"]);

            if ($checkpass == false) {
                $stmt = null;
                header("location:../index.php?error=WrongPassword");
                exit();
            }

            if ($checkpass == false) {
                $stmt = null;
                header("location:../index.php?error=WrongPassword");
                exit();
            } elseif ($checkpass == true) {
                $stmt = $this->connect()->prepare("SELECT * from `login` WHERE name =? OR email =? AND password =?;");
            }

            if (!$stmt->execute(array($name, $name, $pwd))) {
                $stmt = null;
                header("location:../index.php?error=StmtError");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location:../index.php?error=UserNotFound");
                exit();
            }
            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location:../index.php?error=UserNotFound");
                exit();
            }
            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['user_id'] = $user[0]['Id'];
            $_SESSION['user_name'] = $user[0]['name'];


        }
    }

    // Login Controller
    class LOG extends Login
    {

        private $name = '';
        private $pwd = '';

        public function __construct($name, $pwd)
        {
//        echo "$name -> name $pwd -> pwd";
//            die('ZAIB');
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


    $Login = new LOG($name, $pwd);
    $Login->LoginUser();
//    die('z12');
    return header('location:../index.php?error=none');
}
else{
    die('no result');
}
// Login Controller end


//   echo "N -> $name, pwd -> $pwd";

// Here is the main object where all the data is called on!
//    echo "<pre>, print_r(LoginCtrl,1) ,</pre>";



//error starts from here!!!!

    
// Go back to the front page







// running error and handlers