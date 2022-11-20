<?php
    session_start();
    require_once('../model/meeting.php');

    $day = $_POST['day'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    if($day == "" || $start == "" || $end == ""){
        //echo "null username/password/email";
        header('location: ../views/Meetings.php?err=null');

    }else { 
        $user = ['day'=>$day, 'start'=> $start, 'end'=> $end];
        $status = insertUser($user);
        if($status){
            header('location: ../views/Meetings.php');
        }else{
            echo "DB insert error!";
        }
        
    }


?>