<div class="packageItineraries index">
	<h2><?php echo __('Package Itineraries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('activity'); ?></th>
			<th><?php echo $this->Paginator->sort('duration'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('created_by'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('modified_by'); ?></th>
			<th><?php echo $this->Paginator->sort('packages_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($packageItineraries as $packageItinerary): ?>
	<tr>
		<td><?php echo h($packageItinerary['PackageItinerary']['id']); ?>&nbsp;</td>
		<td><?php echo h($packageItinerary['PackageItinerary']['activity']); ?>&nbsp;</td>
		<td><?php echo h($packageItinerary['PackageItinerary']['duration']); ?>&nbsp;</td>
		<td><?php echo h($packageItinerary['PackageItinerary']['created']); ?>&nbsp;</td>
		<td><?php echo h($packageItinerary['PackageItinerary']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($packageItinerary['PackageItinerary']['modified']); ?>&nbsp;</td>
		<td><?php echo h($packageItinerary['PackageItinerary']['modified_by']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($packageItinerary['Packages']['id'], array('controller' => 'packages', 'action' => 'view', $packageItinerary['Packages']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $packageItinerary['PackageItinerary']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $packageItinerary['PackageItinerary']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $packageItinerary['PackageItinerary']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $packageItinerary['PackageItinerary']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Package Itinerary'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packages'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
