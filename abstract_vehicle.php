<?php
abstract class abstract_vehicle
{
    public $vehicle_name;
    public $vehicle_make;
    public $vehicle_model;
    public $vehicle_year;

    private $VIN;

    abstract public function vehicle_info($name, $make, $model, $year, $VIN);
}
?>