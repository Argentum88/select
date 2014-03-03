<?php
    class Config {
        public static $db_conf=array(
            'dbname' => "sakila",
            'user' => "root",
            'pass' => "1234",
        );

        public static $smarty_conf=array(
            'layouts_dir' => 'application/views/layouts/',
            'template_dir'=>'application/views/',
            'compile_dir' => 'application/views/templates_c/',
            'cache_dir' => 'application/views/cache/',
        );
    }