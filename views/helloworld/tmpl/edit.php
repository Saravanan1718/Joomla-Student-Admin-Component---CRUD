<?php 
 defined('_JEXEC') or die('Restricted Access');
 JHTMl::_('behavior.tooltip');
 //echo "inside edit.php -views/helloworld/tmpl";
?>
<form action="<?php echo JRoute::_('index.php?option=com_helloworld&layout=edit&Id='.(int) $this->item->Id); ?>"method="post" name="adminForm" id="adminForm">
   <fieldset class="adminform">
        <legend><?php echo JText::_('DETAILS'); ?> </legend>
         <ul class="adminformlist">
 <?php foreach($this->form->getFieldset() as $field): ?>
            <li><?php echo $field->label;echo $field->input;?></li>
 <?php endforeach; 
 //print_r($field); ?>
         </ul>
    </fieldset>
    <div>
      <input type="hidden" name="task" value="helloworld.edit" />
      <?php echo JHtml::_('form.token');?>
    </div>
 </form>
