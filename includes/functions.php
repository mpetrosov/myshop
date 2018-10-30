<?php
    include_once('conf.php');
    include_once('connect.php');

    function getCars(){
            global $conn;

            $sql = "SELECT id, name FROM `car_brand`";

            $result = mysqli_query($conn, $sql);

            $cars = [];

            while ($row = mysqli_fetch_assoc($result)) {
                $cars[] = $row;
            }

           return $cars;

        }

        function getProductCars($category = ''){
            global $conn;

            $sql = "SELECT `car_model`.`id`, `car_model`.`name` FROM `car_model`";
            if ($category) {
                $sql .= ' INNER JOIN `car_brand` ON `car_model`.`car_id` = `car_brand`.`id` WHERE `car_brand`.`name` = "' . $conn->escape_string ($category) . '" ';
            }
            $result = mysqli_query($conn, $sql);
            $cars = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $cars[] = $row;
            }
           return $cars;
        }
    
        function getBikes(){
            global $conn;
            $sql = "SELECT id, name FROM `bike_brand`";
            $result = mysqli_query($conn, $sql); ;
            $bikes = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $bikes[] = $row;
            }
            return $bikes;
        }

        function getProductBikes($category = ''){
            global $conn;

            $sql = "SELECT `bike_model`.`id`, `bike_model`.`name` FROM `bike_model`";
            if ($category) {
                $sql .= ' INNER JOIN `bike_brand` ON `bike_model`.`bike_id` = `bike_brand`.`id` WHERE `bike_brand`.`name` = "' . $conn->escape_string ($category) . '" ';
            }
            $result = mysqli_query($conn, $sql);
            $bikes = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $bikes[] = $row;
            }
           return $bikes;
        }

        function getLaptops(){
            global $conn;
            $sql = "SELECT id, name FROM `laptop_brand`";
            $result = mysqli_query($conn, $sql); ;
            $laptops = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $laptops[] = $row;
            }
            return $laptops;
        }

        function getProductLaptops($category = ''){
            global $conn;

            $sql = "SELECT `laptop_model`.`id`, `laptop_model`.`name` FROM `laptop_model`";
            if ($category) {
                $sql .= ' INNER JOIN `laptop_brand` ON `laptop_model`.`laptop_id` = `laptop_brand`.`id` WHERE `laptop_brand`.`name` = "' . $conn->escape_string ($category) . '" ';
            }
            $result = mysqli_query($conn, $sql);
            $laptops = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $laptops[] = $row;
            }
           return $laptops;
        }

        function getTVs(){
            global $conn;
            $sql = "SELECT id, name FROM `tv_brand`";
            $result = mysqli_query($conn, $sql); ;
            $tvs = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $tvs[] = $row;
            }
            return $tvs;
        }

        function startsWith($haystack, $needle)
        {
             $length = strlen($needle);
             return (substr($haystack, 0, $length) === $needle);
        }
        
        function endsWith($haystack, $needle)
        {
            $length = strlen($needle);
            if ($length == 0) {
                return true;
            }
        
            return (substr($haystack, -$length) === $needle);
        }