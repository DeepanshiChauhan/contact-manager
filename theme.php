<?php
@$theme_color=$_POST['theme_color'];
if(isset($_POST['submit']))
{
if($theme_color=="CATEGORY1")
{
    header_show('CONTACT APP','css/style.css');
}
else if($theme_color=="CATEGORY2")
{
    header_show('CONTACT APP','css/style2.css');
}
else if($theme_color=="CATEGORY3")
{
    header_show('CONTACT APP','css/style3.css');
}

else if($theme_color=="CATEGORY4")
{
    header_show('CONTACT APP','css/style4.css');
}
else if($theme_color=="CATEGORY5")
{
    header_show('CONTACT APP','css/style5.css');
}
else
{
    header_show('CONTACT APP','css/style.css');
}
}
 else 
{
header_show();    
}
?>
