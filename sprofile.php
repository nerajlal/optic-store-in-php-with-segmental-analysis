<?php
	include('shead.php');
	include('dbconnect.php');

?>

<div class="card-header card-header-border-bottom">
                <h2>Update Profile</h2>
            </div>

           <?php

             
              //$p=1;
              session_start();
              //$uname=$_GET['id'];
              $lid=$_SESSION['lkey']; 
              $result = mysql_query("SELECT * FROM login where lid=$lid");

              while($row = mysql_fetch_array($result))
              {
              ?>
     
     <form method="post" action="" class="mt-4">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="email" class="form-label text-white">User Name</label>
                <div class="input-group">
                    <!-- <span class="input-group-text">@</span> -->
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <div class="input-group">
                    <!-- <span class="input-group-text" id="password-addon"><i class="bi bi-shield-lock"></i></span> -->
                    <input type="text" class="form-control" id="password" name="password" value="<?php echo $row['password']; ?>" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-md-12">
                <button class="btn btn-success" name="submit" type="submit">Update</button>
            </div>
        </div>
    </form>
    </div>
    <div>.</div>
          <div>.</div>
          <div>.</div>

            <?php
              }
?>
        </div>
    </div></form>
<?php
                              //include 'includes/dbconnect.php';
                             if(isset($_POST['submit']))
                             {
                                 
                                
                                  


                                 $sql="update login set email='$_POST[email]',password='$_POST[password]' where lid=$lid";

                                 //echo"$sql";
                                 $result=mysql_query($sql,$conn);
                                if($result)
                                {
                                    echo "<script>alert('Password updated!');location.href='sprofile.php';</script>";
                                }
                                else
                                {
                                    echo "<script>alert('Not updated!');location.href='sprofile.php';</script>";
                                }
                             }  
                                
                         
                            
                        ?>

    
</div>