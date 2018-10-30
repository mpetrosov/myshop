<?php
    include('includes/auth.php');
    include_once('includes/session.php');
    include_once('includes/conf.php');
    
    if(!isAuthenticated()){
        include('includes/header.php');
        include('includes/sidebar.php');
    }else{
        include('includes/header1.php'); 
        include('includes/sidebar.php');
    }
?>
 

        <div class="content">TV`s
            <div class="product-view">
                product 1 view
            </div>
            <div class="product-view">
                product 2 view
            </div>
            <div class="product-view">
                product3
            </div>
            <div class="product-view">
                product 4 view 
            </div>
            <div class="product-view">
                product 5 view
            </div>
        </div>
<?php
    include('includes/footer.php');
?>       
