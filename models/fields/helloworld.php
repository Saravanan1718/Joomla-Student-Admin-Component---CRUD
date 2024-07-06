<?php
// No direct access to this file
defined('_JEXEC') or die;

// import the list field type
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');

/**
 * HelloWorld Form Field class for the HelloWorld component
 */
class JFormFieldHelloWorld extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var		string
	 */
	 
	protected $type = 'HelloWorld';

	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return	array		An array of JHtml options.
	 */
	protected function getOptions() 
	{
	     // echo "helloworld.php - Fileds-Models";
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('Id,Name,Age,Email');
		$query->from('#__helloworld');
		$db->setQuery((string)$query);
		$messages = $db->loadObjectList();
		$options = array();
		if ($messages)
		{
			foreach($messages as $message) 
			{
				$options[] = JHtml::_('select.option', $message->Id, $message->Name,$message->Age,$message->Email);
			}
		}
		$options = array_merge(parent::getOptions(), $options);
		return $options;
	}
}
