<?php

class Controller_Main extends Controller
{
    function __construct(){
        $this->smt = new SMTemplate(Config::$smarty_conf);
        $this->model=new Model_Main(Config::$db_conf);
    }

	function action_index()
	{
        $result=$this->model->get_data();
        $this->smt->render('template', $result);
	}
}