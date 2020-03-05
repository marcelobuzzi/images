<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload = array(
  'packages'  => array(),
  'libraries' => array(
    'form_validation',
    'database',
    'cart',
    'pagination',
    'email',
    'image_lib',
  ),
  'drivers'   => array(),
  'helper'    => array(
    'url',
    'form',
    'cookie',
  ),
  'config'    => array(),
  'language'  => array(),
  'model'     => array(
    'MImagenes',
  ),
);
