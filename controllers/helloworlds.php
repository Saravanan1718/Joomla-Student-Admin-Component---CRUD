<?php 
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

//import Joomla controlleradmin library
jimport ('joomla.application.component.controlleradmin');

/**
*HelloWorlds Controller
*/
Class HelloWorldControllerHelloWorlds extends JControllerAdmin
{
    public function getModel($name='HelloWorld' ,$prefix='HelloWorldModel'){
        //echo "inside helloworlds.php - controller folder";
 	$model= parent::getModel($name,$prefix,array('ignore_request'=>true));
 	return $model;
    } 
}
