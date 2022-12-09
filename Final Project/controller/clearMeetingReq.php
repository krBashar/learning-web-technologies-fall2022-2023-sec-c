<?php

    session_start();

    require_once('../models/meetinginfo.php');

    $status = clearMeetings($_POST['clear']);
        if($status){
            header('location: ../views/meetingReqManager.php');
        }else{
            echo "DB insert error!";
        }

?>