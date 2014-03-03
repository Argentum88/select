<?php

class Model_Country extends Model {

    function get_data($country){
        $sql="SELECT city FROM country INNER JOIN city ON city.country_id=country.country_id AND country='".$country."'";
        $result = $this->DBH->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}