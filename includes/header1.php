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
        <div class="logo">
            <div class="name">
                <a href="main.php"> <h1 class="grass">My Litle Shop.com</h1></a>
            </div>
            <div class="help">
                <a href="help.php" class="button-help">  help <i class="fas fa-info-circle"></i></a>
            </div>
            <div class="message">
                <a href="messages.php" class="button-help">messages<i class="fas fa-comments"></i></a>
            </div>
            <div class="login">
                <a href="logout.php" class="button-help">logout<i class="fas fa-sign-out-alt"></i></a>
            </div>
            <div class="shopcar">
                <a href="#" class="button-help">car<i class="fas fa-shopping-cart"></i></a>
            </div>
            <div class="searchBox">
                <form action="./search.php" method="POST">
                    <input type="text" id="searchBar" name="search" placeholder="Search ..." maxlength="25" autocomplete="off">
                    <input class="searchBtn" type="submit" value="GO!" name="searchBtn">
                </form>
            </div>            
        </div>