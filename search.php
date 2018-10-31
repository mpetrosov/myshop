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
<?php
    if (isset($_POST['searchBtn'])){
        $search = mysqli_real_escape_string($conn, $_POST['search']);
        $sql = "(SELECT `name`, `price`, `dateOfmanufacture` FROM `car_model` 
        WHERE `name` LIKE '%$search%' OR `price` LIKE '%$search%' OR `dateOfmanufacture` LIKE '%$search%')
        UNION
        (SELECT `name`, `price`, `processor`, `screenSize`, `storageCapacity`, 'ram' as type FROM `laptop_model` 
        WHERE `name` LIKE '%$search%' OR `price` LIKE '%$search%' OR `processor` LIKE '%$search%')";
      
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);

        if ($queryResult > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                echo" <h3>".$row['name']."</h3>
                        <p>".$row['price']."</p>
                        <p>".$row['dateOfmanufacture']."</p>";
            }
        } else {
            echo "There are no results matching your search";
        }
    }
    ?>