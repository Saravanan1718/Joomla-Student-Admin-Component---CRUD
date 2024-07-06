<?php 
defined('_JEXEC') or die('Restricted Access');
jimport('joomla.application.component.modeladmin');
class HelloWorldModelHelloWorld extends JModelAdmin
{
  
  public function getTable($type ='HelloWorld',$prefix='HelloWorldTable',$config=array())
  {
     //echo "helloworld.php - Models ";
      return JTable::getInstance($type,$prefix,$config);
  }
  public function getForm($data = array(),$loadData = true)
  {
    $form=$this->loadForm('com_helloworld.helloworld','helloworld',array('control'=>'jform','load_data'=>$loadData));
    
    if(empty($form)){
      return false;
    }
    return $form;
  }
  protected function loadFormData(){
      $data = JFactory::getApplication()->getUserState('com_helloworld.edit.helloworld.data',array());
      if(empty($data))
      {
        $data =$this->getItem();
      }
      return $data;
    }
 }
