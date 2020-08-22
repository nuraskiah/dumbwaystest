<?php
    $conn = mysqli_connect("localhost", "root", "", "rmp");

    function query($query){
        global $conn;
        $res = mysqli_query($conn, $query);
        $dataList = [];
        while($data = mysqli_fetch_assoc($res)) $dataList[] = $data;
        return $dataList;
    }
    
    function addCustomer($data){
        global $conn;

        $name = htmlspecialchars($data["name"]);
        $address = htmlspecialchars($data["address"]);
        $phone = htmlspecialchars($data["phone"]);
        $motor = htmlspecialchars($data["motor"]);

        $query = "INSERT INTO customer_tb
                    VALUES ('', '$name', '$address', '$phone', '$motor')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function addProduct($data){
        global $conn;

        $name = htmlspecialchars($data["name"]);
        $brand = htmlspecialchars($data["brand"]);
        $image = htmlspecialchars($data["image"]);
        $color = htmlspecialchars($data["color"]);
        $specification = htmlspecialchars($data["specification"]);
        $stock = htmlspecialchars($data["stock"]);

        $query = "INSERT INTO motorcycle_tb
                    VALUES ('', '$name', '$brand', '$image', '$color', '$specification', '$stock')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function addBrand($data){
        global $conn;

        $name = htmlspecialchars($data["name"]);

        $query = "INSERT INTO brand_tb VALUES ('', '$name')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function buy($data){
        global $conn;
        $id = $data["buy"];
        $query = "UPDATE motorcycle_tb SET stock = stock-1 WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

?>