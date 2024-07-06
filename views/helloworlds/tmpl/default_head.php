<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
$listOrder	= $this->escape($this->state->get('list.ordering'));
$listDirn	= $this->escape($this->state->get('list.direction'));
?>
<tr>
        <th><input type="checkbox" name="checkall-toggle" value="" title="Check All" onclick="Joomla.checkAll(this)"></th>
	<th >
	     
	    <?php echo JText::_('ID'); ?>
	<th>
	
	    <?php echo JHtml::_('grid.sort','Name','a.Name',$listDirn, $listOrder);?></th>
	
	
	<th>
	   <?php echo JHtml::_('grid.sort','Age','a.Age',$listDirn, $listOrder); ?> </th>
	<th>
	   <?php echo JHtml::_('grid.sort','Email','a.Email',$listDirn, $listOrder); ?></th>
</tr>
   <div>
     <input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>" />
     <input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>" />
     <?php echo JHtml::_('form.token'); ?>
   </div>
