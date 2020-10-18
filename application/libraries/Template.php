<?php
Class Template{
    var $template=array();
    function set($name,$value)
    {
        $this->template[$name] = $value;
    }
    function load($tmp   =  ' ',  $view =  ' ', $view_data =  array(),  $return  =   FALSE)
    {
        $this->CI =& get_instance();

        $this->set('contents',$this->CI->load->view($view,$view_data,TRUE));
        return $this->CI->load->view($tmp,$this->template,$return);
    }
}