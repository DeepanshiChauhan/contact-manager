<?php
extract($_POST);
$db_con=mysqli_connect('localhost','root');
mysqli_select_db($db_con,'contact');
$query="UPDATE  account SET name='$uname' , email_id='$uid',contact='$uphone',city='$ucity' WHERE ID='$user_id'";
$return=mysqli_query($db_con,$query);
if (isset($_POST['UPDATE_CONTACT']))
{
echo '<script>';
echo 'alert("data updated")';
echo '</script>';
header('location:profile.php?pid=3');}
else 
    {
?>
<script>
    alert("data not  updated");
</script>
     
 <?php
 
    }
    mysqli_close($db_con);
    ?>

