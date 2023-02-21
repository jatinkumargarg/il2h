<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();


$autoload['libraries'] = array('form_validation','database','session','parser','pagination');


$autoload['drivers'] = array();

$autoload['helper'] = array('form','html','url','date','email','my_email_helper');


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array('Crud_Model'=>'CRUD');
