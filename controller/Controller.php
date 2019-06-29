<?php
    class Controller {

        protected $controller_name;
        protected $view_name;
        protected $data;  // 模版数据


        // 至少两个参数 controller name 和 view
        function __construct($controller_name)
        {
            $this->controller_name = $controller_name;
//            $this->view_name = $view_name;
        }


        function assign($key, $value)
        {
            $this->data[$key] = $value;
        }

        function display($file)
        {
            extract($this->data);
            include $file;
        }

    }
?>
