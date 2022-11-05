<?php 
    $db = new mysqli("localhost", "root", "", "fb_chalange");
        $userid = $_SESSION['userid'];

    $result = $db->query("SELECT * FROM post WHERE userid='$userid'");
    
    while ($fetch = $result->fetch_assoc()) {
        $postid = $fetch['ID'];
        $username = $fetch['username'];
        $content = $fetch['content'];
        $date = $fetch['Date'];
        $posterid = $fetch['userid'];
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="border border-white m-5 p-2 text-center" style="width: 500px; box-shadow: 1px 1px 10px gray;">
            <p><?php echo $username."#".$posterid." "; ?><?php echo "<a style='text-decoration: none;' class='text-muted'>> ".$date."</a>"; ?> </p><hr>
            <p class=""><?php echo $content; ?></p><a href="<?php echo '../post/delete.php?ID='.$postid ?>" class="btn btn-danger">Törlés</a>
        </div>
    </body>
    <?php } ?>
</html>