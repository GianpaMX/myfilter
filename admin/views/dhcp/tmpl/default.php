<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');

// load tooltip behavior
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_myfilter'); ?>" method="post" name="adminForm">
	<table class="adminlist">
		<tbody>
		<tr>
		<th><?php echo JText::_('DHCP Server'); ?></th>
		<td><?php echo ($this->dhcpServer->getEnabled()?JText::_('Yes'):JText::_('No'));?></td>
		</tr>
		<tr>
		<th><?php echo JText::_('Interface'); ?></th>
		<td><?php echo implode(',', (array)$this->dhcpServer->getInterface());?></td>
		</tr>
		<tr>
		<th><?php echo JText::_('Expand Hosts'); ?></th>
		<td><?php echo ($this->dhcpServer->getExpandHosts()?JText::_('Yes'):JText::_('No'));?></td>
		</tr>
		<tr>
		<th><?php echo JText::_('Domain'); ?></th>
		<td><?php echo $this->dhcpServer->getDomain();?></td>
		</tr>
		<tr>
		<th><?php echo JText::_('DHCP Range'); ?></th>
		<td><?php echo $this->dhcpServer->getDHCPRange();?></td>
		</tr>
		<tr>
		<th><?php echo JText::_('DHCP Hosts'); ?></th>
		<td><?php echo implode('<br/>', (array)$this->dhcpServer->getDHCPHosts());?></td>
		</tr>
		<tr>
		<th><?php echo JText::_('DHCP Options'); ?></th>
		<td><?php echo implode('<br/>', (array)$this->dhcpServer->getDHCPOptions());?></td>
		</tr>
		<tr>
		<th><?php echo JText::_('Log Queries'); ?></th>
		<td><?php echo ($this->dhcpServer->getLogQueries()?JText::_('Yes'):JText::_('No'));?></td>
		</tr>
		<tr>
		<th><?php echo JText::_('Log DHCP'); ?></th>
		<td><?php echo ($this->dhcpServer->getLogDHCP()?JText::_('Yes'):JText::_('No'));?></td>
		</tr>
		</tbody>
	</table>
</form>
