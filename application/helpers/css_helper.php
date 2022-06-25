<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

//Dynamically add CSS files to header page
if(!function_exists('add_header_css')){
    function add_header_css($file='')
    {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');

        if(empty($file)){
            return;
        }

        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){   
                $header_css[] = $item;
            }
            $ci->config->set_item('header_css',$header_css);
        }else{
            $str = $file;
            $header_css[] = $str;
            $ci->config->set_item('header_css',$header_css);
        }
    }
}

//Dynamically add CSS files to header page
if(!function_exists('add_footer_css')){
    function add_footer_css($file='')
    {
        $str = '';
        $ci = &get_instance();
        $footer_css = $ci->config->item('footer_css');

        if(empty($file)){
            return;
        }

        if(is_array($file)){
            if(!is_array($file) && count($file) <= 0){
                return;
            }
            foreach($file AS $item){   
                $footer_css[] = $item;
            }
            $ci->config->set_item('footer_css',$footer_css);
        }else{
            $str = $file;
            $footer_css[] = $str;
            $ci->config->set_item('footer_css',$footer_css);
        }
    }
}

if(!function_exists('put_headers_css')){
    function put_headers_css()
    {
        $str = '';
        $ci = &get_instance();
        $header_css = $ci->config->item('header_css');

        foreach($header_css AS $item){
            $str .= '<link rel="stylesheet" href="'.base_url().'application/assets/css/'.$item.'" type="text/css" />'."\n";
        }

        return $str;
    }
}

if(!function_exists('put_footers_css')){
    function put_footers_css()
    {
        $str = '';
        $ci = &get_instance();
        $footer_css = $ci->config->item('footer_css');

        foreach($footer_css AS $item){
echo "sis".$item;                    
            $str .= '<link rel="stylesheet" href="'.base_url().'application/assets/css/'.$item.'" type="text/css" />'."\n";
        }

        return $str;
    }
}
