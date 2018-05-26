
<?php
$db_con=mysqli_connect('localhost','root');
mysqli_select_db($db_con,'contact');
$query="SELECT * FROM  account";
$return=mysqli_query($db_con,$query);
$num=mysqli_num_rows($return);

?>


<div class="mid_right">
        <?php
            
            if(isset($_POST['update']))
                {
                for($j=1;$j<=$num;$j++)
                {
                 $user_id=$j;
                
                @$fetch=$_POST["$user_id"];
                if(isset($_POST["$user_id"]))
                {
                    $db_con=mysqli_connect('localhost','root');
                    mysqli_select_db($db_con,'contact');
                    $query="SELECT * FROM  account WHERE ID='$fetch'";
                    $return1=mysqli_query($db_con,$query);
                    $row1= mysqli_fetch_array($return1);
                
                }}
        ?>
        <div class="box1">
        <div class="content1"> 
        <h3>UPDATE YOUR CONTACTS HERE</h3><br>
        <form method="post" action="updation_data.php">
            <p><input type="hidden" name="user_id" value="<?php echo @$row1['ID'];?>"></p>
            <p><input type="text" name="uname" value="<?php echo @$row1['name'];?>"></p><br>
            <p><input type="email" name="uid" value="<?php echo @$row1['email_id'];?>"></p><BR>
            <p><input type="text" name="uphone" value="<?php echo @$row1['contact'];?>"></p><BR>
            <p><input type="text" name="ucity" value="<?php echo @$row1['city'];?>"></p><br>
            <p><input type="submit" name="UPDATE_CONTACT" value="UPDATE CONTACT"></p>
        
        </form>
        </div>
    </div>
        <?php
            
                mysqli_close($db_con);
                }
            
    else {
        ?>
        <center><h1 class="d"> Contact List</h1></center>
        <form method="post" >
        <table class="table">
            <tr>
                <th>USER_ID</th>
                <th>NAME</th>
                <th>EMAIL_ID</th>
                <th>CONTACT NUMBER</th>
                <th>CITY</th>
                <th>UPDATE CONTACT LIST</th>
            </tr>
            <?php
                for($i=1;$i<=$num;$i++)
                    {
                        $row= mysqli_fetch_array($return);
                    
            ?>
            <tr>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email_id'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><center><input type="radio" name="<?php echo $i;?>" value="<?php echo $row['ID']; ?>"></center></td>
                
            </tr>
            <?php
                    
                    }
            ?>
            <tr>
                <td colspan="6"><center><input type="submit" name="update" value="UPDATE"></center></td>
            
            </tr>
            <?php
                    }
            ?>
        </table>
        </form>
    </div>
    <div class="clr"></div>
</body>


