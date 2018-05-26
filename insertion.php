<?php
@$uname=$_POST['uname'];
@$uid=$_POST['uid'];
@$uphone=$_POST['uphone'];
@$ucity=$_POST['ucity'];
$db_con=mysqli_connect('localhost','root');
mysqli_select_db($db_con,'contact');
$query="INSERT INTO account ( name,email_id,contact,city,profile_id) VALUES ('$uname','$uid', $uphone,'$ucity','".$_SESSION['email']."')";
mysqli_query($db_con,$query);
mysqli_close($db_con);
?>
