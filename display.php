
<?php
$db_con=mysqli_connect('localhost','root');
mysqli_select_db($db_con,'contact');
$query="SELECT * FROM  account WHERE profile_id='".$_SESSION['email']."'";
$return=mysqli_query($db_con,$query);
$num=mysqli_num_rows($return);
?>


    <div class="mid_right">
        <center><h1 class="d"> Contact List</h1></center>
        <table class="table">
            <tr>
                <th>USER_ID</th>
                <th>NAME</th>
                <th>EMAIL_ID</th>
                <th>CONTACT NUMBER</th>
                <th>CITY</th>
            </tr>
            <?php
                for($i=0;$i<$num;$i++)
                    {
                        $row= mysqli_fetch_array($return);
                    
            ?>
            <tr>
                <td><?php echo $row['ID'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email_id'];?></td>
                <td><?php echo $row['contact'];?></td>
                <td><?php echo $row['city'];?></td>
                
            </tr>
            <?php
                    }
            ?>

            
        </table>
    </div>
    <div class="clr"></div>
</body>


