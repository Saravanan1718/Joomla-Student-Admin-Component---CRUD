<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<?php foreach($this->items as $i => $item): ?>
     
	<tr class="row<?php echo $i % 4; ?>">
	        <td>
			<?php echo JHtml::_('grid.id', $i, $item->Id); ?>
		</td>
		<td>
			<?php echo $item->Id; ?>
		</td>
	        <td> <a href="<?php echo JRoute::_('index.php?option=com_helloworld&view=helloworld&task=helloworld.edit&Id='.$item->Id); ?>"><?php echo $item->Name ;?></a></td>
		<td><?php echo $item->Age ;?></td>
	 	<td><?php echo $item->Email; ?></td>
	</tr>
    
<?php endforeach; ?>
