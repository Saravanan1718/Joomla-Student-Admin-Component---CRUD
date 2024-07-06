<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import Joomla view library
jimport('joomla.application.component.view');

/**
 * HelloWorlds View
 */
class HelloWorldViewHelloWorlds extends JView
{
     
	/**
	 * HelloWorlds view display method
	 * @return void
	 */
	 protected $state;
	 protected $f_levels;
	 protected $sortDirection;
	 protected $sortColumn;
	function display($tpl = null) 
	{
		// Get data from the model
		$items = $this->get('Items');
		$pagination = $this->get('Pagination');
		$this->state	= $this->get('State');

		// Check for errors.
		if (count($errors = $this->get('Errors'))) 
		{
			JError::raiseError(500, implode('<br />', $errors));
			return false;
		}
		
		$options	= array();
		$options[]	= JHtml::_('select.option', '10', JText::_('Above 10'));
		$options[]	= JHtml::_('select.option', '15', JText::_('Above 15'));
		$options[]	= JHtml::_('select.option', '20', JText::_('Above 20'));
		$options[]	= JHtml::_('select.option', '25', JText::_('Above 25'));
		$options[]	= JHtml::_('select.option', '30', JText::_('Above 30'));
		
		$this->f_levels = $options;
		
		// Assign data to the view
		$this->items = $items;
		$this->pagination = $pagination;
		
		//set the toolbar
		$this->addToolBar();
		
		//$this->sortDirection = $state->get('list.direction');
		//$this->sortColumn = $state->get('list.ordering');

		// Display the template
		parent::display($tpl);
	}
	 
	protected function addToolBar(){
	     JToolBarHelper::title(JText::_('Database'));
	     JToolBarHelper::deleteList('','helloworlds.delete');
	     JToolBarHelper::editList('helloworld.edit');
	     JToolBarHelper::addNew('helloworld.add');
	}
}
