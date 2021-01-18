<?php
require_once("abstract_vehicle.php");

  class vehicle extends abstract_vehicle
  {
    public function vehicle_info($name, $make, $model, $year, $VIN)
    {
        $this->vehicle_name = $name;
        $this->vehicle_make = $make;
        $this->vehicle_model = $model;
        $this->vehicle_year = $year;

        $this->VIN = $VIN;
    }

    public function toString()
    {
        ob_start();
?>     
        <ul>
        <li>name: <?=$this->vehicle_name?></li>
        <li>make: <?=$this->vehicle_make?></li>
        <li>model: <?=$this->vehicle_model?></li>
        <li>year: <?=$this->vehicle_year?></li>
        <li>VIN: <?=$this->VIN?></li>
        </ul>
<?php
    return ob_get_clean();
    }
  }

?>