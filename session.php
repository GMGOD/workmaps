<?php 
if(!isset($_SESSION)){ 
        session_start(); 
    }
if ($_SESSION['www_id'] == "") {
if(!isset($_SESSION))
        session_start();
			$_SESSION['www_id'] = 0;
			$_SESSION['www_group_id'] = 0;
			$_SESSION['www_nombre'] = "";
			$_SESSION['www_apellido'] = "";
			$_SESSION['www_mail'] = "";
			$_SESSION['www_state'] = 0;
			$_SESSION['www_unban_time'] = 0;
}
?>