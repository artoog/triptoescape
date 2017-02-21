<div class="packageItineraries form">
<?php echo $this->Form->create('PackageItinerary'); ?>
	<fieldset>
		<legend><?php echo __('Add Package Itinerary'); ?></legend>
	<?php
		echo $this->Form->input('activity');
		echo $this->Form->input('duration');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('packages_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Package Itineraries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Packages'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
