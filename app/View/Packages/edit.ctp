<div class="packages form">
<?php echo $this->Form->create('Package'); ?>
	<fieldset>
		<legend><?php echo __('Edit Package'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('organizations_id');
		echo $this->Form->input('package_code');
		echo $this->Form->input('wholesale_price');
		echo $this->Form->input('retail_price');
		echo $this->Form->input('base_currency');
		echo $this->Form->input('country_offer');
		echo $this->Form->input('tour_sharing');
		echo $this->Form->input('inclusive_of_hotel');
		echo $this->Form->input('inclusive_of_flights');
		echo $this->Form->input('valid_from_date');
		echo $this->Form->input('valid_until_date');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Package.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Package.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizations'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Package Itineraries'), array('controller' => 'package_itineraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package Itinerary'), array('controller' => 'package_itineraries', 'action' => 'add')); ?> </li>
	</ul>
</div>
