<div class="wishlists form">
<?php echo $this->Form->create('Wishlist'); ?>
	<fieldset>
		<legend><?php echo __('Edit Wishlist'); ?></legend>
	<?php
		echo $this->Form->input('wshID');
		echo $this->Form->input('cusID');
		echo $this->Form->input('bkID');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Wishlist.wshID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Wishlist.wshID'))); ?></li>
		<li><?php echo $this->Html->link(__('List Wishlists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wishlist Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
