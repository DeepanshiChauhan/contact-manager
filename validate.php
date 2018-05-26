
<?php
@$uid=$_POST['uid'];
@$pwd=$_POST['pwd'];
$db_con=mysqli_connect('localhost','root');
if(!(mysqli_select_db($db_con,'contact')))
{
    $msg="dhumptana";
}
$query="SELECT * FROM log_in WHERE email_id='$uid' && password='$pwd'";
$result=mysqli_query($db_con,$query);
$count=mysqli_num_rows($result);
if($count==1)
{
    $_SESSION['email']=$uid;
    header('location:profile.php'); 
} 
else
{
    $msg="invalid user_id or password";    
}
?>