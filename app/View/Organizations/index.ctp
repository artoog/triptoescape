<div class="organizations index">
	<h2><?php echo __('Organizations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('organization_code'); ?></th>
			<th><?php echo $this->Paginator->sort('organization_name'); ?></th>
			<th><?php echo $this->Paginator->sort('organization_type'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('address_line1'); ?></th>
			<th><?php echo $this->Paginator->sort('address_line2'); ?></th>
			<th><?php echo $this->Paginator->sort('address_line3'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('province_state'); ?></th>
			<th><?php echo $this->Paginator->sort('postal_code'); ?></th>
			<th><?php echo $this->Paginator->sort('country_code'); ?></th>
			<th><?php echo $this->Paginator->sort('url'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email_address'); ?></th>
			<th><?php echo $this->Paginator->sort('culture_code'); ?></th>
			<th><?php echo $this->Paginator->sort('currency_code'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_title'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_firstName'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_middleName'); ?></th>
			<th><?php echo $this->Paginator->sort('contact_lastName'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($organizations as $organization): ?>
	<tr>
		<td><?php echo h($organization['Organization']['id']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['organization_code']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['organization_name']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['organization_type']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['status']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['address_line1']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['address_line2']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['address_line3']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['city']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['province_state']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['postal_code']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['country_code']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['url']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['phone']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['email_address']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['culture_code']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['currency_code']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['contact_title']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['contact_firstName']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['contact_middleName']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['contact_lastName']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['created']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['modified']); ?>&nbsp;</td>
		<td><?php echo h($organization['Organization']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $organization['Organization']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $organization['Organization']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $organization['Organization']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $organization['Organization']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Organization'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
