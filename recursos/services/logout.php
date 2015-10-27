<?php
session_start();
$session_name = session_name();
$_SESSION = array();
if ( isset( $_COOKIE[ $session_name ] ) ) {
    if ( setcookie(session_name(), '', time()-3600, '/') ) {
        header("Location: ../../index.php");
        exit();   
    }
 
}

?>