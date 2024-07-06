<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

// load tooltip behavior
JHtml::_('behavior.tooltip');
JHtml::_('behavior.multiselect');
?>
<form action="<?php echo JRoute::_('index.php?option=com_helloworld'); ?>" method="post" name="adminForm">
       <fieldset id="filter-bar">
         <div class="filter-search fltlft">
           <label class="filter-search-lbl" for="filter_search"> Filter : </label>
           
           <input id="filter_search" type="text" name="filter_search" value="<?php echo $this->escape($this->state->get('filter.search')); ?>" title="<?php echo JText::_('COM_HELLOWORLD_SEARCH_IN_NAME'); ?>" >
           <button type = "Submit"><?php echo JText::_('JSEARCH_FILTER_SUBMIT'); ?></button>
           <button type ="button" onclick="document.id('filter_search').value='';this.form.submit();">Clear</button>
           </div>
           <div class="filter-select fltrt">
			<select name="filter_age" class="inputbox"  onchange="this.form.submit()">
				<option value=""><?php echo JText::_('-Select Age-');?> </option>
				<?php echo JHTML::_('select.options', $this->f_levels, 'value', 'text',$this->state->get('filter.age'));?>
			
			</select>
	   </div>

           </fieldset>
	<table class="adminlist">
		<thead><?php echo $this->loadTemplate('head');?></thead>
		<tfoot><?php echo $this->loadTemplate('foot');?></tfoot>
		<tbody><?php echo $this->loadTemplate('body');?></tbody>
	</table>
	<div>
	     <input type="hidden" name="task" value="" />
	     <input type="hidden" name="boxchecked" value="0"/>
	     
 	     <?php echo JHtml::_('form.token'); ?>
	</div>
</form>
