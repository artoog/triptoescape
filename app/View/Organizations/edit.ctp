<div class="organizations form">
<?php echo $this->Form->create('Organization'); ?>
	<fieldset>
		<legend><?php echo __('Edit Organization'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('organization_code');
		echo $this->Form->input('organization_name');
		echo $this->Form->input('organization_type');
		echo $this->Form->input('status');
		echo $this->Form->input('address_line1');
		echo $this->Form->input('address_line2');
		echo $this->Form->input('address_line3');
		echo $this->Form->input('city');
		echo $this->Form->input('province_state');
		echo $this->Form->input('postal_code');
		echo $this->Form->input('country_code');
		echo $this->Form->input('url');
		echo $this->Form->input('phone');
		echo $this->Form->input('email_address');
		echo $this->Form->input('culture_code');
		echo $this->Form->input('currency_code');
		echo $this->Form->input('contact_title');
		echo $this->Form->input('contact_firstName');
		echo $this->Form->input('contact_middleName');
		echo $this->Form->input('contact_lastName');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Organization.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Organization.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
