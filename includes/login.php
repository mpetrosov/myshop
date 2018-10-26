<?php
    session_start();

    if (isset($_POST['submit'])) {
        include_once 'connect.php';

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
        //Error handlers
        //Check for empty fields
        if ( empty($username) ||empty($pwd)){
            header("Location: ../signin.php?login=empty");
            exit();
        } else {
            $sql = "SELECT * FROM users WHERE u_name = '$username' OR u_email = '$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck < 1){
                header("Location: ../signin.php?login=error");
                exit();
            } else {
                if ($row = mysqli_fetch_assoc($result)){
                    //De-hashing the password
                    $hashedPwdCheck = password_verify($pwd, $row['u_pwd']);
                    if ($hashedPwdCheck == false){
                        header("Location: ../signin.php?login=error");
                        exit();
                    } elseif ($hashedPwdCheck == true) {
                        //Log in the user here 
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['u_email'] = $row['u_email'];
                        $_SESSION['u_name'] = $row['u_name'];
                        // $_SESSION['is_admin'] = $row['is_admin']; 
                        include('header1.php');
                        header("Location: ../userpage.php?login=success");
                       
                        exit();
                    }
                }
            }
        }
    } else {
        // include('header.php');
        header("Location: ../signin.php?login=error");
        
        exit();
    }
