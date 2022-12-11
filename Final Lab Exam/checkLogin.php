<?php

    session_start();

    require_once('usermodel.php');

    $user['userid'] = $_POST['userid'];
    $user['password'] = $_POST['password'];

        if($user['password']!== null && $user['userid']!== null) 
        {
                $user = login($user);
                if($user){

                    $_SESSION['userid'] = $user['userid'];

                    $user1 = searchUserById($user);

                    if($user1['usertype']===User)
                    {
                        $_SESSION['name'] = $user1['name'];
                        header('location:UserHome.php');
                    }
                    else
                    {
                        $_SESSION['name'] = $user1['name'];
                        header('location:AdminHome.php');
                    }
                }
                else{
                    echo "Db error";
                    header('location:Registration.php');
            }
        }
        else
        {
            echo "Input cannot be empty";
            header('location:Registration.phps');
        }

?>