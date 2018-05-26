<?php
session_start();
function header_show($title="BLOGGER",$css_path="css/style.css")
{
echo '<html>';
    echo '<head>';
        echo "<title> $title </title>";
        echo "<link href='$css_path' rel='stylesheet'>";
        echo '<link href="images\FILE220..png" rel="shortcut icon">';
        echo '<link href="lib/css/font-awesome.min.css" rel="stylesheet">';
    echo '</head>';
    echo '<body>';
        echo '<div class="wrapper1">';
            echo '<div class="header1">';
                echo "<br><h1><i class='fa fa-users'>$title</i></h1>";
            echo '</div>';
            
        echo '</div>';
    echo '</body>';
echo '</html>';
}
function header2()
{
if($_SESSION['email']=='')
{
    header('location:home.php');
}
@$checking_off=$_GET['check_out'];
if($checking_off=='logout')
{
    session_destroy();
    header('location:home.php');
}
?>
<div class="mid_left">
    <img src="images/1.jpg">
    <ul>
        <li><a href="profile.php?pid=1">ADD CONTACTS</a></li>
        <li><a href="profile.php?pid=2">DELETE CONTACTS</a></li>
        <li><a href="profile.php?pid=3">UPDATE CONTACTS</a></li>
        <li><a href="profile.php?pid=4">DISPLAY CONTACTS</a></li>
        <li><a href="profile.php?pid=5">SETTINGS</a></li>
        <li><a href="profile.php?check_out=logout">LOGOUT</a></li>
        
    </ul>
</div>

<?php
} 
?>


