<?php 
    $db = new mysqli("localhost", "root", "", "fb_chalange");
    session_start();

    if(isset($_POST['like'])) {
        echo $_SESSION['posterid'];
        echo "<br>".$_SESSION['postid'];
        echo "<br>".$_SESSION['userid'];
        echo "<br>".$_SESSION['username'];

        $postid = $_SESSION['postid'];
        $posterid = $_SESSION['posterid'];
        $userid = $_SESSION['userid'];

        $sql = "INSERT INTO reactions('postid', 'posterid', 'userid', 'Date', 'content') VALUE('$postid', '$posterid', '')";
    }

    if(isset($_POST['dislike'])) {
        echo "Dislike";
    }
    if(isset($_POST['comment'])) {
        echo "komment";
    }
?>