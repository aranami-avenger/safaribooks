<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Admin'); ?></h1>
			<ul>
				<?php
					if ($this->Session->read('Auth')['User']['usrRole'] === '2') {
							echo '<li>' . $this->Html->link(__('Add new customer'), array('controller' => 'users', 'action' => 'add')) . '</li>';
							echo '<li>' . $this->Html->link(__('View book reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
					}
					elseif ($this->Session->read('Auth')['User']['usrRole'] === '3') {
						echo '<li>' . $this->Html->link(__('Add new book'), array('controller' => 'books', 'action' => 'add')) . '</li>';
						echo '<li>' . $this->Html->link(__('View book reviews'), array('controller' => 'reviews', 'action' => 'index')) . '</li>';
						echo '<li>' . $this->Html->link(__('View book procurements'), array('controller' => 'procures', 'action' => 'index')) . '</li>';
						echo '<li>' . $this->Html->link(__('View coupons'), array('controller' => 'coupons', 'action' => 'index')) . '</li>';
						echo '<li>' . $this->Html->link(__('View wishlist'), array('controller' => 'wishlists', 'action' => 'index')) . '</li>';
						echo '<li>' . $this->Html->link(__('View users'), array('controller' => 'users', 'action' => 'index')) . '</li>';
					}
				?>
			</ul>
		</div>
	</div>
</div>

<div id="templatemo_content_right">
	<div class="users index">
		<h1><?php echo __('Users'); ?></h1>
		<table class="table table-condensed table-bordered table-hover" cellpadding="0" cellspacing="0">
			<tr>
				<th><?php echo $this->Paginator->sort('usrFname', 'First Name'); ?></th>
				<th><?php echo $this->Paginator->sort('usrLname', 'Last Name'); ?></th>
				<th><?php echo $this->Paginator->sort('usrEmail', 'Email Address'); ?></th>
				<?php echo ($this->Session->read('Auth')['User']['usrRole'] === '3' ? '<th>' . $this->Paginator->sort('usrRole', 'Role') . '</th>' : false); ?>
				<th><?php echo $this->Paginator->sort('usrStat', 'Status'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
			<?php foreach ($users as $user): ?>
				<tr>
					<td><?php echo h($user['User']['usrFname']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['usrLname']); ?>&nbsp;</td>
					<td><?php echo h($user['User']['usrEmail']); ?>&nbsp;</td>
					<?php echo ($this->Session->read('Auth')['User']['usrRole'] === '3' ? '<td align="center">' . ($user['User']['usrRole'] == '1' ? 'Customer' : ($user['User']['usrRole'] == '2' ? 'Employee' : 'Manager')) . '&nbsp;</td>' : false); ?>
					<?php echo '<td align="center">' . ($user['User']['usrStat'] == '1' ? 'Deactivated&nbsp;</td>' : 'Active&nbsp;</td>'); ?>
					<td class="actions" align="center">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['usrID'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['usrID'])); ?>
						<?php 
							if ($user['User']['usrStat'] == '0') {
								echo $this->Form->postLink(__('Deactivate'), array('action' => 'delete', $user['User']['usrID']), null, __('Are you sure you want to deactivate the account?'));
							}
							else {
								echo $this->Form->postLink(__('Re-activate'), array('action' => 'readd', $user['User']['usrID']), null, __('Are you sure you want to re-activate the account?'));
							}
						?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
		<hr>
		<div class="paging" align="center">
			<?php
				echo $this->Paginator->prev('<< ', array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ' '));
				echo $this->Paginator->next(' >>', array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
</div>
