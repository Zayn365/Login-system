<?php
class Signup extends Connect
{
    protected function setUsers($name, $email, $pwd)
    {
        $stmt = $this->connect()->prepare('INSERT INTO login (name, email, password) VALUES (?, ?, ?)');
        $hashedPwd = password_hash($pwd , PASSWORD_DEFAULT);

        if (!$stmt->execute(array($name, $email, $hashedPwd))) {
            $stmt = null;
            header("location:../index1.php?error=StmtError");
            exit();
        }
//        else {
//            echo "SENT!!";
//            die('Executed');
//        }

    }

protected function checkUser($name, $email){
    $stmt = $this->connect()->prepare("SELECT name from `login`  WHERE name =? OR email =? ");

    if(!$stmt->execute(array($name,$email))){
        $stmt = null;
        header("location:../index1.php?error=StmtError");
        exit();
    }
    if($stmt->rowCount() > 0){
     $resultCheck = false;
    }
    else{
        $resultCheck = true;
    }
    return $resultCheck;
}
}


