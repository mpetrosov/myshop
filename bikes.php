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

        <div class="product-content">
            <div class="sub-header">BIKES</div>
                <?php
                $category = isset($_GET['category']) ? $_GET['category'] : '';
                $products = getProductBikes($category);

                foreach($products as $bike){?>
                <div class="product-view">
                    <h3><?php echo $bike['name']; ?></h3>
                    <p><?php echo $bike['id']; ?>
                </div>
                <?php } ?>
           
        </div>
<?php
    include('includes/footer.php');
?>       
