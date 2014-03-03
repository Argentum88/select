<?php

class Controller_404 extends Controller
{
    function __construct(){
        $this->smt = new SMTemplate(Config::$smarty_conf);
    }

    function action_index()
    {
        $this->smt->render('404');
    }
}
