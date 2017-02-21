<div class="packageItineraries view">
<h2><?php echo __('Package Itinerary'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($packageItinerary['PackageItinerary']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo h($packageItinerary['PackageItinerary']['activity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Duration'); ?></dt>
		<dd>
			<?php echo h($packageItinerary['PackageItinerary']['duration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($packageItinerary['PackageItinerary']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($packageItinerary['PackageItinerary']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($packageItinerary['PackageItinerary']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($packageItinerary['PackageItinerary']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Packages'); ?></dt>
		<dd>
			<?php echo $this->Html->link($packageItinerary['Packages']['id'], array('controller' => 'packages', 'action' => 'view', $packageItinerary['Packages']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Package Itinerary'), array('action' => 'edit', $packageItinerary['PackageItinerary']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Package Itinerary'), array('action' => 'delete', $packageItinerary['PackageItinerary']['id']), array(), __('Are you sure you want to delete # %s?', $packageItinerary['PackageItinerary']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Package Itineraries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package Itinerary'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packages'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
