<div id="templatemo_content_left">
	<div class="templatemo_content_left_section">
		<div class="actions">
			<h1><?php echo __('Actions'); ?></h1>
			<ul>
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Coupon.cpnID')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Coupon.cpnID'))); ?></li>
				<li><?php echo $this->Html->link(__('List Coupons'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Checkouts'), array('controller' => 'checkouts', 'action' => 'index')); ?> </li>
			</ul>
		</div>
	</div>
</div>
<div id="templatemo_content_right">
	<div class="coupons form">
		<h1>Edit Coupon</h1>
		<table align="left">
			<?php echo $this->Form->create('Coupon', array('type' => 'file')); ?>
			<?php
				echo $this->Formadd->inputAdd('cpnID', array('label' => 'Coupon Code', 'error' => false, 'size' => '25%', 'type' => 'text', 'maxlength' => '20'));
				echo $this->Formadd->inputAdd('cpnType', array('label' => 'Type', 'error' => false, 'onclick' => 'couponFunction(value)', 'options' => array(
					'' => '', 
					'1' => 'Free Shipping', 
					'0' => 'Discount')));
				echo $this->Formadd->inputAdd('cpnParam', array('label' => 'Discount', 'error' => false, 'options' => array(
					'' => '', 
					'0.10' => '10%', 
					'0.20' => '20%', 
					'0.30' => '30%', 
					'0.40' => '40%', 
					'0.50' => '50%')));
				echo $this->Formadd->inputAdd('cpnDetail', array('label' => 'Description', 'error' => false, 'cols' => '40', 'rows' => '3', 'maxlength' => '100'));
				echo $this->Formadd->inputAdd('cpnStat');
			?>
			<tr><td colspan="3"><div class="cleaner_with_image" /></td></tr>
			<tr>
				<td colspan="3" align="center">
					<div class="submit">
						<hr><br>
						<?php echo $this->Form->submit(__('Submit'), array('div' => false)); ?>
						<?php echo $this->Form->submit(__('Cancel'), array('type' => 'button', 'id' => 'edit', 'div' => false, 'onclick' => 'submitForm(id)')); ?>
						<input type="hidden" name="hiddenCancel" id="hiddenCancel">
					</div>
					<?php echo $this->Form->end();?>
				</td>
			</tr>
			
		</table>
	</div>
</div>