<?php
session_start();
if(isset($_SESSION['name'])){
    $link = $_POST['link'];
    if (in_array($_SESSION['name'], array("nigger", "n1gger", "N1gger", "Nigger"))){
        exit();
    }
	
	$link_message = "<div class='msgln'><b class='user-name'>".$_SESSION['name']."</b> <a href=$link>$link</a> </div>";
    file_put_contents("log.html", $link_message, FILE_APPEND | LOCK_EX);
}
?>