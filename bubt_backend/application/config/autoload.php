<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| 1. Packages
| 2. Libraries
| 3. Helper files
| 4. Custom config files
| 5. Language files
| 6. Models
*/
/*
| -------------------------------------------------------------------
|  Auto-load Packges
| Prototype:
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
*/
$autoload['packages'] = array();
/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| Prototype:
|	$autoload['libraries'] = array('database', 'session', 'xmlrpc');
*/
$autoload['libraries'] = array('session','pagination', 'xmlrpc' , 'form_validation', 'email','upload','paypal');
/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|	$autoload['helper'] = array('url', 'file');
*/
$autoload['helper'] = array('url','file','form','security','string','inflector','directory','download','multi_language');
/*
| -------------------------------------------------------------------
|  Auto-load Config files
| -------------------------------------------------------------------
| Prototype:
|	$autoload['config'] = array('config1', 'config2');
*/
$autoload['config'] = array();
/*
| -------------------------------------------------------------------
|  Auto-load Language files
| -------------------------------------------------------------------
| Prototype:
|	$autoload['language'] = array('lang1', 'lang2');
*/
$autoload['language'] = array();
/*
| -------------------------------------------------------------------
|  Auto-load Models
| -------------------------------------------------------------------
| Prototype:
|	$autoload['model'] = array('model1', 'model2');
*/
$autoload['model'] = array( 'email_model' , 'crud_model');