<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');
/**
 * HelloWorldList Model
 */
class HelloWorldModelHelloWorlds extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return	string	An SQL query
	 */
	
        protected $searchInFields = array('a.Name','a.Age','a.Email'); 
	
	public function __construct($config=array())
	{
	  // echo "helloworlds.php - Models  ";
	 // $config['filter_fields']=array_merge($this->searchInFields,array('a.Age'));
	  //print_r($config);
	  $config['filter_fields']=array('a.Name','a.Age','a.Email');
	  //print_r($config);
	  parent::__construct($config);
	}
	
	
	protected function getListQuery()
	{
	       
		// Create a new query object.		
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);
		// Select some fields
		$query->select('Id,Name,Age,Email')
		     ->from('#__helloworld AS a');
		    
		     
		 $regex = str_replace(' ', '|',$this->getState('filter.search'));
		 //print_r($regex);
		 if(!empty($regex)){
		    $regex=' REGEXP '.$db->quote($regex);
		    $query->where('('.implode($regex.' OR ',$this->searchInFields).$regex.')');
		
	        }
	        if ($Age = $this->getState('filter.age')) {
			$query->where('a.Age >= '.(int) $Age);
		}
		
		$query->order($db->escape($this->getState('list.ordering','a.Name')).' '.$db->escape($this->getState('list.direction', 'ASC')));
	        return $query;
	}
	
	protected function populateState($ordering=null , $direction=null){
	    // Initialise variables.
		$app = JFactory::getApplication('administrator');
	
		// Load the filter state.
		$search = $app->getUserStateFromRequest($this->context.'.filter.search', 'filter_search');
		//Omit double (white-)spaces and set state
		$this->setState('filter.search', preg_replace('/\s+/',' ', $search));
		
          
		//Filter (dropdown) Age
		$Age= $app->getUserStateFromRequest($this->context.'.filter.age', 'filter_age', '', 'string');
		$this->setState('filter.age', $Age);
	
		//Takes care of states: list. limit / start / ordering / direction
		parent::populateState('a.Name', 'asc');
		
	}
}
