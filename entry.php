<?php
if(isset($_POST['LOG_IN']))
{
    extract($_POST);
    if($uid=='' and $pwd=='')
    {
        $msg="enter your email_id and password";
    }
        
    else if($uid=='')
    {
        $msg="enter your email_id";
    }
    else if($pwd=='')
    {
        $msg="enter a valid password";
    }
    else 
     {
   
        include_once 'validate.php';
		
     }
    
}
?>

