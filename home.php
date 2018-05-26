<?php
include_once 'lib\config.php';
header_show();
include_once 'entry.php';

?>
<div class="mid main">
    <div class="box">
    <div class="content"> 
    <form method="post">
        <img src="images/FILE220.PNG" style="height: 150px;width: 150px;">
        <p><input type="email" name="uid" placeholder="enter your email id" required ></p><BR>
        <p><input type="password" name="pwd" placeholder="enter your password" required></p><BR>
        <p><input type="submit" name="LOG_IN" value="LOGIN"></p>
        <p><a href="sign_up.php">SIGN UP FOR FREE</a></p>
        <?php echo @$msg; ?>
    </form>
    </div>
    </div>
                
</div>
            
            
<?php
include_once 'lib\footer.php';
?>

