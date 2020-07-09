<?php

function redirect($page = false, $message=NULL, $message_type = NULL){
    if(is_string($page)) {
        $location = $page;
    } else {
        $location = $_SERVER['SCRIPT_NAME'];
    }

    if ($message != NULL) {
        $_SESSION['message'] = $message;
    }

    if ($message_type != NULL){
        $_SESSION['message_type'] = $message_type;
    }

    //redirect
    header('Location:' .$location);
    exit;
}

//Display message
function displayMessage(){
    if(!empty($_SESSION['message'])){
        $message = $_SESSION['message'];

        if(!empty($_SESSION['message_type'])){
            $message_type = $_SESSION['message_type'];

            //create output
            if($message_type == 'error') {
                echo '<div class = "alert alert-danger>' .$message. '</div>';
            } else {
                echo '<div class= "alert alert-success">' .$message. '</div>';
            }
        }
        //Unset message
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
    } else {
        echo '';
    }
}