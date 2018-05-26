
<?php
$db_con=mysqli_connect('localhost','root');
mysqli_select_db($db_con,'contact');
$query="SELECT * FROM  account";
$return=mysqli_query($db_con,$query);
$num=mysqli_num_rows($return);
?>

<?php
if(isset($_POST['delete']))
{
    $j=1;
    for ($i=1;$i<=$num;$i++,$j++)
    {
        @$index=$j;
        @$del=$_POST["$index"];
        if(isset($del))
        {
            $enter[$i]=$del;
        }
        else 
        {
            $i--;
        }
    
        $db_con=mysqli_connect('localhost','root');
        mysqli_select_db($db_con,'contact');
       
        for($k=1;$k<=$num;$k++)
        {
            $query="DELETE FROM account WHERE ID='$enter[$k]'";
            mysqli_query($db_con,$query);
        }
        
        }
        mysqli_close($db_con);
        header('location:profile.php?pid=2');
        
        }
?>


    <div class="mid_right">
        <h1 class="d">Delete Contacts</h1>
        <form method="post">
        <table class="table">
            <tr>
                <th>USER_ID</th>
                <th>NAME</th>
                <th>EMAIL_ID</th>
                <th>CONTACT NUMBER</th>
                <th>CITY</th>
                <th>SELECT TO DELETE</th>
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
                <td><center><input type="checkbox" name="<?php echo $i;?>" value="<?php echo $row['ID'];?> "></center></td>
            </tr>
            <?php
                    }
            ?>
            <tr>
                <td colspan="6"><center><input type="submit" name="delete" value="DELETE"></center></td>
            </tr>
            
            
        </table>
        </form>
    </div>
    <div class="clr"></div>
</body>


