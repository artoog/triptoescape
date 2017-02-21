<div class="roles view">
<h2><?php echo __('Role'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($role['Role']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rolecode'); ?></dt>
		<dd>
			<?php echo h($role['Role']['rolecode']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($role['Role']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($role['Role']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($role['Role']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($role['Role']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($role['Role']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($role['Role']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($role['Users']['id'], array('controller' => 'users', 'action' => 'view', $role['Users']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Role'), array('action' => 'edit', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Role'), array('action' => 'delete', $role['Role']['id']), array(), __('Are you sure you want to delete # %s?', $role['Role']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Role Settings'), array('controller' => 'role_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role Setting'), array('controller' => 'role_settings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Role Settings'); ?></h3>
	<?php if (!empty($role['RoleSetting'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Settings Category'); ?></th>
		<th><?php echo __('Settings Name'); ?></th>
		<th><?php echo __('Settings Value'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Roles Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($role['RoleSetting'] as $roleSetting): ?>
		<tr>
			<td><?php echo $roleSetting['id']; ?></td>
			<td><?php echo $roleSetting['settings_category']; ?></td>
			<td><?php echo $roleSetting['settings_name']; ?></td>
			<td><?php echo $roleSetting['settings_value']; ?></td>
			<td><?php echo $roleSetting['created']; ?></td>
			<td><?php echo $roleSetting['created_by']; ?></td>
			<td><?php echo $roleSetting['modified']; ?></td>
			<td><?php echo $roleSetting['modified_by']; ?></td>
			<td><?php echo $roleSetting['roles_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'role_settings', 'action' => 'view', $roleSetting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'role_settings', 'action' => 'edit', $roleSetting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'role_settings', 'action' => 'delete', $roleSetting['id']), array(), __('Are you sure you want to delete # %s?', $roleSetting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Role Setting'), array('controller' => 'role_settings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
