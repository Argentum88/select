<?php

class Model
{
    public $DBH;

    function __construct($conf){
        try{
            $this->DBH=new PDO("mysql:host=localhost;dbname=$conf[dbname]", $conf['user'], $conf['pass']);
        }
        catch(PDOException $e) {
            exit('houston, we have a problem!!! Causing incorrect configuration database!!!');
        }
    }

	// метод выборки данных
	public function get_data($data)
	{
		// todo
	}
}