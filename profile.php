<?php
include_once 'lib/config.php';
include_once 'theme.php';
include_once 'validate.php';
header2();
$db_con=mysqli_connect('localhost','root');
mysqli_select_db($db_con,'contact');
$query="SELECT * FROM log_in WHERE email_id='".$_SESSION['email']."'";
$result=mysqli_query($db_con,$query);
$row= mysqli_fetch_array($result);
?>
<div class="mid_right">
    <?php
    echo '<h1>';
    echo " Welcome,".$row['name'].".";
    echo '</h1>';
    @$p_id=$_GET['pid'];
    if($p_id==1)
    {
        include_once 'create.php';
    }
    else if($p_id==2)
    {
        include_once 'delete.php';
    }
    else if($p_id==3)
    {
        include_once 'update.php';
    }
    else if($p_id==4)
    {
        include_once 'display.php';
    }
    else if ($p_id==5) 
    {
        include_once 'set_theme.php';
    }
    
    ?>
</div>
<div class="clr"></div>
<?php
include_once 'lib\footer.php';
?>
