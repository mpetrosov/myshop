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
            <div class="sub-header">CARS</div>
            <?php
            $category = isset($_GET['category']) ? $_GET['category'] : '';
            $products = getProductCars($category);

            foreach($products as $car){?>
            <div class="product-view">
                <h3><?php echo $car['name']; ?></h3>
                <p><?php echo $car['id']; ?>
            </div>
            <?php } ?>
            
        </div>
<?php
    include('includes/footer.php');
?>       
