<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function config(){
$config = array(
    'gl' => array(
                    array(
                        'field' => 'gl_number',
                        'label' => 'gl_number',
                        'rules' => 'required|exact_length[3]'
                    ),
                    array(
                        'field' => 'gl_name',
                        'label' => 'gl_name',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'gl_des',
                        'label' => 'GL Description',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'type_trx',
                        'label' => 'type transaction',
                        'rules' => 'required|alpha'
                    ),
                    array(
                        'field' => 'subsidiary_number',
                        'label' => 'subsidiary number',
                        'rules' => 'required|exact_length[5]'
                    )
                    array(
                        'field' => 'sub_name',
                        'label' => 'subsidary name',
                        'rules' => 'required'
                    )
                    array(
                        'field' => 'sub_des',
                        'label' => 'subsidary description',
                        'rules' => 'required'
                    )
                    array(
                        'field' => 'sub_type_trx',
                        'label' => 'type transaction',
                        'rules' => 'required|alpha'
                    )
                    array(
                        'field' => 'sub_curr',
                        'label' => 'subsidary currency',
                        'rules' => 'required|numeric'
                    )

    ),
    'email' => array(
                    array(
                        'field' => 'emailaddress',
                        'label' => 'EmailAddress',
                        'rules' => 'required|valid_email'
                    ),
                    array(
                        'field' => 'name',
                        'label' => 'Name',
                        'rules' => 'required|alpha'
                    ),
                    array(
                        'field' => 'title',
                        'label' => 'Title',
                        'rules' => 'required'
                    ),
                    array(
                        'field' => 'message',
                        'label' => 'MessageBody',
                        'rules' => 'required'
                    )
    )                          
);
}
