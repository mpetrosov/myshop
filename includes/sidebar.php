<?php
include_once('conf.php');
include_once('connect.php');
include_once('functions.php');



$arrGroups = ['cars'=>'cars.php', 'bikes'=>'bikes.php','laptops'=>'laptops.php','tvs'=>'tvs.php'];
   
?>
<div class="sidebar"><h2>Groups</h2> 
    <div class="select">
        <select id="category-selector">
        <?php
        $currentController = $_SERVER['SCRIPT_NAME'];
        if (endsWith($currentController, 'main.php')) {
            ?>
            <option>All</option>
            <?php
        }


        foreach($arrGroups as $key=>$value){?>

            
                <option value="<?php echo $value;?>" 
                    <?php if (endsWith($currentController, $value)) { echo 'selected="selected"'; } ?>>
                    <?php echo $key;?>
                </option>

        <?php }?>
        </select>
    </div>

    <?php

    // echo $currentController;

    if (endsWith($currentController, 'cars.php')) {
        $cars = getCars();
        foreach($cars as $car){?>
        <div class = "sub-category">
            <a href="cars.php?category=<?=$car['name']?>"><?=$car['name']?></a>
        </div>
        <?php }
    }

    if (endsWith($currentController, 'bikes.php')) {
        $bikes = getBikes();
        foreach($bikes as $bike){?>
        <div class = "sub-category">
            <a href="bikes.php?category=<?=$bike['name']?>"><?=$bike['name']?></a>
        </div>
        <?php }
    }

    if (endsWith($currentController, 'laptops.php')) {
        $laptops = getLaptops();
        foreach($laptops as $laptop){?>
        <div class = "sub-category">
            <a href="laptops.php?category=<?=$laptop['name']?>"><?=$laptop['name']?></a>
        </div>
        <?php }
    }

    if (endsWith($currentController, 'tvs.php')) {
        $tvs = getTvs();
        foreach($tvs as $tv){?>
        <div class = "sub-category">
            <a href="#"><?=$tv['name']?></a>
        </div>
        <?php }
    }
    ?>
</div>




