<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- normalisation of styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <!-- own styles -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Handlee|Source+Code+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <title>myshop</title>
</head>
<body>
    <div class="container">
        <div class="nav"><a href="main.php" class="name"> My Litle Shop.com </a>
            
            <div class="help">
                <a href="help.php" class="button-help">  help <i class="fas fa-info-circle"></i></a>
            </div>
            <div class="message">
                <a href="messages.php" class="button-help">messages<i class="fas fa-comments"></i></a>
            </div>
            <div class="login">
                <a href="signin.php" class="button-help">login<i class="fas fa-sign-in-alt"></i></a>
            </div>
            <div class="shopcar">
                <a href="#" class="button-help">car<i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="searchBox">
                <form action="search.php" method="POST">
                    <input type="text" id="searchBar" placeholder="" value="Search ..." maxlength="25" autocomplete="off">
                    <input class="searchBtn" type="submit" value="GO!">
                </form>
            </div>
            
        </div>
        
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
        <div class="content">
                <div class="col-2">
                    <div class="register-form">
                        <span id="log-in" class="switch-forms">login</span>
                        <h1>Sign up here</h1>
                        <form class="form register" action="includes/register.php" method="POST">
                            <input class="signup_up" type="text" name="email" placeholder="example@example.com" >
                            <input class="signup_middel" type="text" name="username" placeholder="Username" >
                            <input class="signup_down" type="password" name="pwd" placeholder="Password" >
                            <button class="searchBtn" type="submit" name="submit">signup</button>
                        </form>
                    </div>
                    
                    <div class="login-form">
                        <span id="sign-up" class="switch-forms">sign up</span> 
                        <h1>Login here</h1>
                        <form class="form-login" action="includes/login.php" method="POST">
                            <input class="login_up" type="text"  name="username" placeholder="Username/email"/>
                            <input class="login_down" type="password"  name="pwd" placeholder="password"/>
                            <button class="searchBtn" type="submit" name="submit">login</button>
                        </form>
                        <a href="forgot_password.php"> forgot your password?</a></br>
                    </div>
                </div>
            </div>
        <div class="footer">Footer
        </div>        
    </div>
    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
  </script>
  <script src="js/login.js"></script>
</body>
</html>
