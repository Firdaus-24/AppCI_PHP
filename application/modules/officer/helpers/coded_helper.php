<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function codeDecode($passwd,$flag)
{
  $flag = strtolower($flag);
  if($flag == 'c'){
    $cryptKey   = 'qJB0rGtIn5UB1xG03efyCp';
    $qX         = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $passwd, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );

  }else if($flag == 'd'){
    $cryptKey   = 'qJB0rGtIn5UB1xG03efyCp';
    $qX         = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $passwd ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");

  }
  return $qX;
}

