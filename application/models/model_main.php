<?php

    class Model_Main extends Model{

        function get_data($data=NULL){
            $sql = "SELECT country FROM country";
            $result = $this->DBH->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }