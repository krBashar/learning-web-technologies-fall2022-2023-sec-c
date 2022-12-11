<?php

    session_start();

    require_once('usermodel.php');

    $user['password'] = $_POST['password'];
    $user['conpassword'] = $_POST['conpassword'];
    $user['name'] = $_POST['name'];
    $user['email'] = $_POST['email'];
    $user['usertype'] = $_POST['usertype'];
    $user['userid'] = $_POST['userid'];

        if($user['password']!== null && $user['name']!== null && $user['email']!== null && $user['usertype']!== null && $user['userid']!== null) 
        {
            if($user['password'] === $user['conpassword'])
            {
                $user = insertUser($user);
                if($user){
                    header('location:Login.php');
                    }
                else{
                    echo "Db error";
            }
            }
            else{
                header('location:Registration.php');
            }
        }
        else
        {
            echo "Input cannot be empty";
            header('location:Registration.phps');
        }

?>