
<?php
    include('includes/header.php');
?>
        
        <div class="content">
                <div class="col-2">
                    <div class="register-form">
                        <span id="log-in" class="switch-forms">login</span>
                        <h2>Sign up here</h2>
                        <form class="form register" action="includes/register.php" method="POST">
                            <input class="signup_up" type="text" name="email" placeholder="example@example.com" >
                            <input class="signup_middel" type="text" name="username" placeholder="Username" >
                            <input class="signup_down" type="password" name="pwd" placeholder="Password" >
                            <button class="searchBtn" type="submit" name="submit">signup</button>
                        </form>
                    </div>
                    
                    <div class="login-form">
                        <span id="sign-up" class="switch-forms">sign up</span> 
                        <h2>Login here</h2>
                        <form class="form-login" action="includes/login.php" method="POST">
                            <input class="login_up" type="text"  name="username" placeholder="Username/email"/>
                            <input class="login_down" type="password"  name="pwd" placeholder="password"/>
                            <button class="searchBtn" type="submit" name="submit">login</button>
                        </form>
                        <a href="forgot_password.php"> forgot your password?</a></br>
                    </div>
                </div>
            </div>
<?php
    include('includes/footer.php');
?>   
