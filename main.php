<?php
    include('includes/auth.php');
    include_once('includes/session.php');
    include_once('includes/conf.php');
include_once('includes/connect.php');
include_once('includes/functions.php');

    if(!isAuthenticated()){
        include('includes/header.php');
        // include('includes/sidebar.php');
    }else{
        include('includes/header1.php'); 
        // include('includes/sidebar.php');
    }
?>
 

        <div class="content">
            <div class="sub-content">
                <h2>Cars</h2>
                <?php
                $cars = getCars();
                foreach($cars as $car){?>
                <div class = "sub-category">
                    <a href="cars.php?category=<?php echo $car['name']; ?>"><?=$car['name']; ?></a>
                </div>
                <?php } ?>
            </div>
            <div class="sub-content">    
                <h2>Bikes</h2>
                <?php
                $bikes = getBikes();
                foreach($bikes as $bike){?>
                <div class = "sub-category">
                    <a href=bikes.php?category=<?php echo $bike['name']; ?>"><?=$bike['name']?></a>
                </div>
                <?php } ?>
            </div>  
            <div class="sub-content"> 
                <h2>Laptops</h2>
                <?php
                $laptops = getLaptops();
                foreach($laptops as $laptop){?>
                <div class = "sub-category">
                    <a href="#"><?=$laptop['name']?></a>
                </div>
                <?php }?>
            </div>
            <div class="sub-content"> 
                <h2>TVs</h2>
                <?php
                $tvs = getTvs();
                foreach($tvs as $tv){?>
                <div class = "sub-category">
                    <a href="#"><?=$tv['name']?></a>
                </div>
                <?php }?>
            </div>
        </div>
<?php
    include('includes/footer.php');
?>       
