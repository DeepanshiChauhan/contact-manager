<?php
include_once 'insertion.php';
if(isset($_POST['ADD_CONTACT']))
{    
echo '<script type="text/javascript">';
echo 'alert("record has been inserted")';
echo '</script>';
}
?>
<div class="mid_right">
    <div class="box1">
    <div class="content1"> 
        <h2>ADD CONTACTS HERE</h2><br>
    <form method="post">
        <p><input type="text" name="uname" placeholder="enter name" required></p><br>
        <p><input type="email" name="uid" placeholder="enter  email id" required></p><BR>
        <p><input type="text" name="uphone" placeholder="enter contact_number" required></p><BR>
        <p><input type="text" name="ucity" placeholder="enter your city" required></p><br>
        <p><input type="submit" name="ADD_CONTACT" value="ADD CONTACT"></p>
        
    </form>
    </div>
    </div>
</div>
<div class="clr"></div>
