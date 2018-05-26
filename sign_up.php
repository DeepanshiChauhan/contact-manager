<?php
include_once 'lib\config.php';
header_show();
include_once 'validate.php';

?>

<?php
   if(isset($_POST['sign_in']))
{

           include_once 'lib/log_data.php';
	   header('location:profile.php');
}
?>



<div class="mid main">
    <div class="box">
    <div class="content"> 
        <h2>SIGN UP</h2>
        <form method="post" name="form1" >
            <p><input type="text" name="uname" placeholder="enter your username"  ></p><br>
            <p><input type="email" name="uid" placeholder="enter your email id" ></p><br>
            <p><input type="password" name="pwd" placeholder="enter your password" ></p><br>
            <p><input type="password" name="pwd_confirm" placeholder="reenter your password to confirm" ></p><br>
        <p><input type="text" name="ucity" placeholder="enter your city" required></p><br>
        <p><input type="submit" name="sign_in" value="Sign In"></p>
        
    </form>
    </div>
    </div>
                
</div>
            
<?php
include_once 'lib/footer.php';

?>


