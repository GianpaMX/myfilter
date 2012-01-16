<?php

ini_set('display_errors','On');
error_reporting(E_ALL);


// No direct access to this file
defined('_JEXEC') or die('Restricted access');

JLoader::import("controller", JPATH_COMPONENT, 'myfilter.');
if( ($controller = JRequest::getCmd('controller')) && $controller != 'myfilter' )
  JLoader::import("controllers.{$controller}Controller" , JPATH_COMPONENT, 'myfilter.');
else
  $controller = '';

$classname	= 'MyFilterController'.ucfirst($controller);
$controller	= new $classname();

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
