<div class="packages index">
	<h2><?php echo __('Packages'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('organizations_id'); ?></th>
			<th><?php echo $this->Paginator->sort('package_code'); ?></th>
			<th><?php echo $this->Paginator->sort('wholesale_price'); ?></th>
			<th><?php echo $this->Paginator->sort('retail_price'); ?></th>
			<th><?php echo $this->Paginator->sort('base_currency'); ?></th>
			<th><?php echo $this->Paginator->sort('country_offer'); ?></th>
			<th><?php echo $this->Paginator->sort('tour_sharing'); ?></th>
			<th><?php echo $this->Paginator->sort('inclusive_of_hotel'); ?></th>
			<th><?php echo $this->Paginator->sort('inclusive_of_flights'); ?></th>
			<th><?php echo $this->Paginator->sort('valid_from_date'); ?></th>
			<th><?php echo $this->Paginator->sort('valid_until_date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($packages as $package): ?>
	<tr>
		<td><?php echo h($package['Package']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($package['Organizations']['id'], array('controller' => 'organizations', 'action' => 'view', $package['Organizations']['id'])); ?>
		</td>
		<td><?php echo h($package['Package']['package_code']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['wholesale_price']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['retail_price']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['base_currency']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['country_offer']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['tour_sharing']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['inclusive_of_hotel']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['inclusive_of_flights']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['valid_from_date']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['valid_until_date']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['created']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['modified']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $package['Package']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $package['Package']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $package['Package']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $package['Package']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Package'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizations'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Package Itineraries'), array('controller' => 'package_itineraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package Itinerary'), array('controller' => 'package_itineraries', 'action' => 'add')); ?> </li>
	</ul>
</div>
