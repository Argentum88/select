<?php

    class Controller_Country extends Controller {
        function __construct(){
            $this->model=new Model_Country(Config::$db_conf);
        }

        function action_index(){
            $result=$this->model->get_data($_GET['Country']);
            echo json_encode($result);
        }
    }