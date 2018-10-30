<?php
include('includes/connect.php');
date_default_timezone_set('Europe/Amsterdam');
include('includes/header.php')
?>


        
        <div class="sidebar">sidebar
            <div class="category">
                category 1 
            </div>
            <div class="category">
                category 2 
            </div>
            <div class="category">
                category 3 
            </div>
            <div class="category">
                category 4 
            </div>
            <div class="category">
                category 5 
            </div>
            <div class="category">
                category 6 
            </div>
        </div>
        <div class="content">Content
        <div class="right" id="right">
                
                
               
                <?php
                     $get_code = '';
                    if (isset($_GET['code'])){
                        $get_email = $_GET['email'];
                        $get_code = $_GET['code'];
            
                        $query = mysqli_query($conn, "SELECT * FROM users WHERE u_email='".$get_email."'");
                        while($row = mysqli_fetch_assoc($query)){
                            $db_code = $row['passreset'];
                            $db_email = $row['u_email'];
                        }
                 
                        if ( $get_email == $db_email &&  $get_code == $db_code){

                            echo "
                                <form action='pass_resset_complete.php?code=$get_code' method='POST'>
                                Enter a new password <br><input type='password' name='newpass'><br>
                                Re-enter your password<br><input type='password' name='newpass1'><p>
                                <input type='hidden' name='email' value='$db_email'>
                                <button class='button-help' name='submit' type='submit'>Update</button>
                            ";
                        }
                    }

                if (empty($_GET['code'])){
                   
                    echo "
                        <form class='pwdrecov-form' action ='forgot_password.php' method='POST'>
                        Your email <input class='pwdrecover' type='text' name='email' placeholder='email'/>
                        <button class='button-help' name='submit' type='submit'>send</button>
                        </form>
                        "; 
                    if(isset($_POST['email'])) {
                        $email = $_POST['email'];
                        
                        //check if email exists
                        $query = mysqli_query($conn, "SELECT * FROM users WHERE u_email = '".$email."'");
                        $numrow = mysqli_num_rows($query);
                        if ($numrow != 0){


                            while ($row = mysqli_fetch_assoc($query)){
                                $db_email = $row['u_email'];
                            }

                            if ($email == $db_email) {
                                //generate new password
                                $code = rand(10000, 1000000);

                                //send the password to the user
                                $to = $db_email;
                                $subject = "Password reset";
                                $body = "This is an automated email. Pleas do not reply to this email.
                                    Click to link here http://localhost/myshop/forgot_password.php?code=$code&email=$email" ;
                                $headers = "From: $email";
                                
                                //update the database
                                mysqli_query($conn, "UPDATE users SET passreset='$code' WHERE u_email='$email'");

                                mail($to, $subject, $body, $headers);
                                
                                echo "Check your email";

                            } else {
                                echo "Email is incorrect";
                            }
                        }
                    }
                }
                
                ?>  
               
            </div>
        </div>
        </div>
<?php
    include('includes/footer.php');
?>