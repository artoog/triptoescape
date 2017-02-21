<div class="organizations view">
<h2><?php echo __('Organization'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization Code'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['organization_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization Name'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['organization_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization Type'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['organization_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line1'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['address_line1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line2'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['address_line2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address Line3'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['address_line3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Province State'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['province_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postal Code'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Code'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['country_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Culture Code'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['culture_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency Code'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['currency_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Title'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['contact_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact FirstName'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['contact_firstName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact MiddleName'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['contact_middleName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact LastName'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['contact_lastName']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organization'), array('action' => 'edit', $organization['Organization']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organization'), array('action' => 'delete', $organization['Organization']['id']), array(), __('Are you sure you want to delete # %s?', $organization['Organization']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($organization['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organizations Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Groups Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organization['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['organizations_id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['created_by']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td><?php echo $user['modified_by']; ?></td>
			<td><?php echo $user['groups_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Packages'); ?></h3>
	<?php if (!empty($organization['Package'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Organizations Id'); ?></th>
		<th><?php echo __('Package Code'); ?></th>
		<th><?php echo __('Wholesale Price'); ?></th>
		<th><?php echo __('Retail Price'); ?></th>
		<th><?php echo __('Base Currency'); ?></th>
		<th><?php echo __('Country Offer'); ?></th>
		<th><?php echo __('Tour Sharing'); ?></th>
		<th><?php echo __('Inclusive Of Hotel'); ?></th>
		<th><?php echo __('Inclusive Of Flights'); ?></th>
		<th><?php echo __('Valid From Date'); ?></th>
		<th><?php echo __('Valid Until Date'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($organization['Package'] as $package): ?>
		<tr>
			<td><?php echo $package['id']; ?></td>
			<td><?php echo $package['organizations_id']; ?></td>
			<td><?php echo $package['package_code']; ?></td>
			<td><?php echo $package['wholesale_price']; ?></td>
			<td><?php echo $package['retail_price']; ?></td>
			<td><?php echo $package['base_currency']; ?></td>
			<td><?php echo $package['country_offer']; ?></td>
			<td><?php echo $package['tour_sharing']; ?></td>
			<td><?php echo $package['inclusive_of_hotel']; ?></td>
			<td><?php echo $package['inclusive_of_flights']; ?></td>
			<td><?php echo $package['valid_from_date']; ?></td>
			<td><?php echo $package['valid_until_date']; ?></td>
			<td><?php echo $package['created']; ?></td>
			<td><?php echo $package['created_by']; ?></td>
			<td><?php echo $package['modified']; ?></td>
			<td><?php echo $package['modified_by']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'packages', 'action' => 'view', $package['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'packages', 'action' => 'edit', $package['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'packages', 'action' => 'delete', $package['id']), array(), __('Are you sure you want to delete # %s?', $package['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
