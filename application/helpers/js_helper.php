<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');



//Dynamically add Javascript files to header page
if(!function_exists('add_header_js')){
    function add_header_js($file='')
    {
        $str = '';
        $ci = &get_instance();
        $header_js  = $ci->config->item('header_js');

        if(empty($file)){
            return;
        }

        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){
                $header_js[] = $item;
            }
            $ci->config->set_item('header_js',$header_js);
        }else{
            $str = $file;
            $header_js[] = $str;
            $ci->config->set_item('header_js',$header_js);
        }
    }
}

if(!function_exists('add_footer_js')){
    function add_footer_js($file='')
    {
        $str = '';
        $ci = &get_instance();
        $footer_js  = $ci->config->item('footer_js');

        if(empty($file)){
            return;
        }

        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){
                $footer_js[] = $item;
            }
            $ci->config->set_item('footer_js',$footer_js);
        }else{
            $str = $file;
            $footer_js[] = $str;
            $ci->config->set_item('footer_js',$footer_js);
        }
    }
}

if(!function_exists('put_headers_js')){
    function put_headers_js()
    {
        $str = '';
        $ci = &get_instance();
        $header_js = $ci->config->item('header_js');

        foreach($header_js AS $item){
            $str .= '<script type="text/javascript" src="'.base_url().'application/assets/js/'.$item.'"></script>'."\n";
        }

        return $str;
    }
}

if(!function_exists('put_footers_js')){
    function put_footers_js()
    {
        $str = '';
        $ci = &get_instance();
        $footer_js  = $ci->config->item('footer_js');

        foreach($footer_js AS $item){
            $str .= '<script type="text/javascript" src="'.base_url().'application/assets/js/'.$item.'"></script>'."\n";
        }

        return $str;
    }
}