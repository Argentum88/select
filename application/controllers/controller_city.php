<?php
    class Controller_City extends Controller{
        function __construct(){
            $this->model=new Model_City(Config::$db_conf);
        }

        function action_index(){
            $result=$this->model->get_data($_GET['City']);
            echo json_encode($result);
        }
    }