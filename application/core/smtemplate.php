<?php

    class SMTemplate{

        private $_smarty;

        function __construct($conf){
            $this->_smarty=new Smarty();

            $this->_smarty->template_dir = $conf['template_dir'];
            $this->_smarty->compile_dir = $conf['compile_dir'];
            $this->_smarty->cache_dir = $conf['cache_dir'];
            $this->_smarty->addTemplateDir($conf['layouts_dir']);
        }

        function render($template, $data = array(), $layout = 'layout'){
           /*
            foreach($data as $key => $value){
                $this->_smarty->assign($key, $value);
            }
            */
            $this->_smarty->assign('result', $data);
            $content = $this->_smarty->fetch($template . '.tpl');
            $this->_smarty->assign('__content', $content);
            $this->_smarty->display($layout . '.tpl');
        }
    }