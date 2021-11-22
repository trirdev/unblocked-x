<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    
    if (in_array($_SESSION['name'], array("nigger", "n1gger", "N1gger", "Nigger"))){
        exit();
    }
	
	$text_message = "<div class='msgln'><b class='user-name'>".$_SESSION['name']."</b> ".stripslashes(htmlspecialchars($text))."<br></div>";
    file_put_contents("log.html", $text_message, FILE_APPEND | LOCK_EX);
}
?>