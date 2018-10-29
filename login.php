<?php
    require_once 'dbConnect.php';

    session_start();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $login_username = $_POST['username'];
        $login_pwd = $_POST['pwd'];

        $stmt = $db -> prepare('select * from users where user_email = ? and pwd = ?');
        $stmt -> execute([$login_username, $login_pwd]);

        if($stmt > 0){
            $row = $stmt -> fetch(PDO::FETCH_ASSOC);
            $table_username = $row['user_email'];
            $table_pwd = $row['pwd'];
            if(($table_username == $login_username) && ($table_pwd == $login_pwd)){
                $_SESSION['user'] = $login_username;
                $db = null;
                header("location: dashboard.php?username=$login_username");
            }
            else{
                //echo $table_username;
                //echo $table_pwd;
                $db = null;
                echo '<script>alert("Incorrect Password");</script>';
                //Print '<script>window.location.assign("index.php");</script>'; // redirects to index.php
            }
        }
        else{
            $db = null;
            echo '<script>alert("Incorrect User Name");</script>';
            Print '<script>window.location.assign("index.php");</script>'; // redirects to index.php
        }
    }
    else{
        $db = null;
        echo '<script>alert("...");</script>';
        Print '<script>window.location.assign("index.php");</script>'; // redirects to index.php
    }
?>