<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

// load tooltip behavior
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_myfilter'); ?>" method="post" name="adminForm">
	<table class="adminform">
		<tbody>
			<tr>
				<td width="120"><label for="username"><?php echo JText::_('JGLOBAL_USERNAME'); ?>
				</label>
				</td>
				<td><input type="text" id="username" name="username"
					class="input_box" size="70" value="" />
				</td>
			</tr>
		</tbody>
	</table>
</form>
