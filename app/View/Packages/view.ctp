<div class="packages view">
<h2><?php echo __('Package'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($package['Package']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organizations'); ?></dt>
		<dd>
			<?php echo $this->Html->link($package['Organizations']['id'], array('controller' => 'organizations', 'action' => 'view', $package['Organizations']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Package Code'); ?></dt>
		<dd>
			<?php echo h($package['Package']['package_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wholesale Price'); ?></dt>
		<dd>
			<?php echo h($package['Package']['wholesale_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Retail Price'); ?></dt>
		<dd>
			<?php echo h($package['Package']['retail_price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Base Currency'); ?></dt>
		<dd>
			<?php echo h($package['Package']['base_currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Offer'); ?></dt>
		<dd>
			<?php echo h($package['Package']['country_offer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tour Sharing'); ?></dt>
		<dd>
			<?php echo h($package['Package']['tour_sharing']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inclusive Of Hotel'); ?></dt>
		<dd>
			<?php echo h($package['Package']['inclusive_of_hotel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inclusive Of Flights'); ?></dt>
		<dd>
			<?php echo h($package['Package']['inclusive_of_flights']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid From Date'); ?></dt>
		<dd>
			<?php echo h($package['Package']['valid_from_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valid Until Date'); ?></dt>
		<dd>
			<?php echo h($package['Package']['valid_until_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($package['Package']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($package['Package']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($package['Package']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($package['Package']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Package'), array('action' => 'edit', $package['Package']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Package'), array('action' => 'delete', $package['Package']['id']), array(), __('Are you sure you want to delete # %s?', $package['Package']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('controller' => 'organizations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organizations'), array('controller' => 'organizations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Package Itineraries'), array('controller' => 'package_itineraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package Itinerary'), array('controller' => 'package_itineraries', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Package Itineraries'); ?></h3>
	<?php if (!empty($package['PackageItinerary'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Activity'); ?></th>
		<th><?php echo __('Duration'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Packages Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($package['PackageItinerary'] as $packageItinerary): ?>
		<tr>
			<td><?php echo $packageItinerary['id']; ?></td>
			<td><?php echo $packageItinerary['activity']; ?></td>
			<td><?php echo $packageItinerary['duration']; ?></td>
			<td><?php echo $packageItinerary['created']; ?></td>
			<td><?php echo $packageItinerary['created_by']; ?></td>
			<td><?php echo $packageItinerary['modified']; ?></td>
			<td><?php echo $packageItinerary['modified_by']; ?></td>
			<td><?php echo $packageItinerary['packages_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'package_itineraries', 'action' => 'view', $packageItinerary['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'package_itineraries', 'action' => 'edit', $packageItinerary['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'package_itineraries', 'action' => 'delete', $packageItinerary['id']), array(), __('Are you sure you want to delete # %s?', $packageItinerary['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Package Itinerary'), array('controller' => 'package_itineraries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
