<?php 
    require_once('db.php');

    function insertUser($user){
        $con = getConnection();
        $sql = "insert into users values('{$user['day']}', '{$user['start']}', '{$user['end']}')";
        $status = mysqli_query($con, $sql);
        return $status;
    }

?>