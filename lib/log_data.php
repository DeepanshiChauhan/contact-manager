<?php
@$uname=$_POST['uname'];
@$uid=$_POST['uid'];
@$pwd=$_POST['pwd'];
@$ucity=$_POST['ucity'];
$db_con=mysqli_connect('localhost','root');
mysqli_select_db($db_con,'contact');
$query="INSERT INTO log_in ( name,email_id,password,city) VALUES ('$uname','$uid','$pwd','$ucity')";
mysqli_query($db_con,$query);
mysqli_close($db_con);
?>
