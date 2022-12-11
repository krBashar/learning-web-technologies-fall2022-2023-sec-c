<?php 
    require_once('db.php');

    function insertUser($user){
        $con = getConnection();
        $sql = "INSERT into userinfo values('', '{$user['password']}', '{$user['name']}', '{$user['email']}', '{$user['usertype']}', '{$user['userid']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

    function login($user){
        $con = getConnection();
        $sql = "SELECT * from userinfo where userid='{$user['userid']}' and password='{$user['password']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        return $user;
    }

    function searchUserById($user){
        $con = getConnection();
        $sql = "SELECT usertype, name FROM usereinfo where userid='{$user['userid']}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
        
    }

?>