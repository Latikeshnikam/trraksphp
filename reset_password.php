 
<?php include "header.php";
$email=$pass=$cpass="";
$emailErr= $passErr =$cpassErr="";
?>
<?php
$u_time =$_GET['tm']; // fetching time variable from URL
$cur_time = time(); //fetching current time to check with GET variable's time
  




  $em=$_GET['em'];  
    if (isset($_POST['submit'])){
// echo "<script>alert('Here');</script>";
        if (empty($_POST['email'])){
            $emailErr="Email is required";
           
        }else
        {
            $email=$_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format"; 
            }
         }
        if (empty($_POST["pass"])) 
        {
            $passErr = "please enter password";
          } else {

            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match('/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/', $_POST["pass"])) {
              $passErr = "password must contain at least one number, one lowercase and one uppercase letter and at least of six charecters"; 
            }
            else{
                if($_POST["pass"]!==$_POST["cpass"]){
                    $cpassErr ="Enter Confirm password same as password.";
                }
                else
                {
                    $pass =  $_POST["pass"];
                    //        pass reset mechnisum
        
                    // Connect to MySQL
                    require "configure.php";
                    // Was the form submitted?

                        // Gather the post data 
                        $email = $_POST["email"];
                        $hash = $_GET["q"];
                        // Use the same salt from the forgot_password.php file
                        $salt = "498#2D83B631%3800EBD!801600D*7E3CC13";

                        // Generate the reset key
                        $resetkey = hash('sha512', $salt.$email);

                        // Does the new reset key match the old one?
                        if ($resetkey == $hash)
                        {

                                //has and secure the password
                                $pass= password_hash($_POST["cpass"], PASSWORD_DEFAULT);

                                // Update the user's password
                            $sql = "UPDATE `register_user` SET `Password` = '$pass' WHERE`Email`='$email'";
                            

                            if($conn->query($sql))
                                    {
                                       echo "<script>alert('Your password has been successfully reset');window.location.href='index.php';</script>";
                                    }
                                    else
                                    {
                                        $Err= "something went wrong. Try again";
                                    }

                                    $conn->close();
                                }
                        else
                        {
                            $Err= "Your password reset key is invalid.";
                        }
                    
                    }           
              }
        }
    }
//              $pass =  password_hash($_POST["spass"], PASSWORD_DEFAULT);
              
          
        
//        end of validation

    

?>


<style>
    .form{
        
        margin-left: auto;
        margin-right:auto;
    } 
      .four
      {
      
          padding-top: 50px;
         border: 2px black;
         border-style: solid;
   
          width: 100%;
          }
    </style>

<div class="container">
 <div class="row justify-content-md-center mt-5">
  <?php if ($cur_time - $u_time < 900) //300 = 5 min
{ ?>
     <div class="col-md-6">
          <!-- Content here -->
          <div class="form-color">
              <form class="form" method="post" method="">
                <p class="text-center h4">Link will expire with in 15 min</p><br>
                        <div class="form-group input-group-lg">
                            <input class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" name="email" type="email" placeholder="Email Address For Search"  value="<?=$em?>" readonly required>
                           <span class="danger" style="color: red;" ><?=$emailErr?></span>
                        </div>

                        <div class="form-group input-group-lg">
                                <label for="pass"><h5><b>Password</b></h5></label>
                              <input type="password" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"  id="pass"  aria-describedby="passHelp" placeholder=" Enter Password"  name="pass" required>
                              <span class="danger" style="color: red;"><?=$passErr?></span>
                        </div>
                                <div class="form-group input-group-lg">
                                    <label for="cpass"><h5><b>Confirm Password</b></h5></label>
                                  <input name="cpass" type="password" aria-label="Large" aria-describedby="inputGroup-sizing-sm" class="form-control" id="cpass" placeholder="Confirm Password" required>
                                  <span class="danger" style="color: red;"><?=$cpassErr?></span>
                                </div>
                 
                  <button type="submit" class="btn btn-primary my-2 my-sm-0 btn-lg btn-block" name="submit">Save Changes</button>
                  <span class="danger" style="color: red;"><?=$Err?></span>
              </form>
          </div>
     </div>
     <?php 
         }
      else
      {
       ?>
     <div class="col-md-8" style="height: 275px; padding-top:2%;">
           <p class="h3 mb-3"><b>Link is not available more</b></p>
           <hr>
           Request for a new Recovery Link 
           <a href="https://trraks.com" class="btn btn-success" name="submit"> Try Again </button>
         </a>
     </div>

 <?php } ?>
</div>
</div>


<?php 
include "footer.php";
 ?>

