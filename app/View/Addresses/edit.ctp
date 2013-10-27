<div class="addresses form">
<?php echo $this->Form->create('Address'); ?>
	<fieldset>
		<legend><?php echo __('Edit Address'); ?></legend>
	<?php
		echo $this->Form->input('zipCode');
		echo $this->Form->input('cityName');
		echo $this->Form->input('provName');
		echo $this->Form->input('areaCode');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Address.zipCode')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Address.zipCode'))); ?></li>
		<li><?php echo $this->Html->link(__('List Addresses'), array('action' => 'index')); ?></li>
	</ul>
</div>
