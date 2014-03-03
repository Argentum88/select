<?php
    class Model_City extends Model{

        function get_data($city){
            $sql="SELECT address FROM address INNER JOIN city ON address.city_id=city.city_id AND city='".$city."'";
            $result = $this->DBH->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }