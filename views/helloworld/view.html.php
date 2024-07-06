<?php 
  defined('_JEXEC') or die('Restricted Access');
  jimport('joomla.application.component.view');
  
  Class HelloWorldViewHelloWorld extends JView{
    
       public function display($tpl = null){
         // echo "view.html.php - view-helloworld";
         $form = $this->get('Form');
         $item = $this->get('Item');
         
         if(count($errors = $this->get('Errors'))){
              JError::raiseError(500,implode('<br />',$errors));
              return false;
          }
          $this->form =$form;
          $this->item =$item;
          
          $this->addToolBar();
          parent::display($tpl);
       }
       
       protected function addToolBar(){
           $input = JFactory::getApplication()->input;
           $input->set('hidemainmenu',true);
           $isNew =($this->item->Id ==0);
           JToolBarHelper::title($isNew ? JText::_('NEW') 
                                        : JText::_('EDIT'));
           JToolBarHelper::save('helloworld.save');
           JToolBarHelper::cancel('helloworld.cancel', $isNew ? 'JTOOLBAR_CANCEL'
                                                              : 'JTOOLBAR_CLOSE');
      }
   }        
