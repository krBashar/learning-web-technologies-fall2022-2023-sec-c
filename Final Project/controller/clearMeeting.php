<?php

    session_start();

    require_once('../models/meetinglist.php');

    $status = clearMeetings($_POST['submit']);
        if($status){
            header('location: ../views/scheduleMeeting.php?succ=done');
        }else{
            echo "DB insert error!";
        }

?>