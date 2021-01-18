<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Abstraction Class Example</title>
</head>
<body>
Abstract Class Vehicle Test
<?php
    require_once("vehicle.php");
    $objVehicle = new vehicle();
    $objVehicle->vehicle_info("My Truck", "Ford", "Ranger", 2010, "VSDSDFDSFIKJDFS11TT");

    echo $objVehicle->toString();
?>
</body>
</html>