<?php $this->Html->addCrumb('New Group', $this->Html->url( null, true )); ?>
<div id="content">
	<div class="container">
		<div class="section">
			<div class="section-header">
				<h3>Crate a New Group</h3>
				<div class="section-header">
					<h3>Modify Rule</h3>
					<div class="section-actions">
						<?php echo $this->Html->link(__('View group'), array('action'=>'view', $this->Form->value('Group.id')), array('class'=>'btn btn-primary'));?>
						<a href="<?php echo $this->Html->url( array('controller'=> 'rules', 'action'=>'index')); ?>" class="btn btn-link">Cancel</a>
						<?php echo $this->Html->link(__('Delete'), array('action'=>'delete', $this->Form->value('Group.id')), array('class'=>'btn btn-danger'), sprintf(__('Are you sure you want to delete @%s?'), $this->Form->value('Group.name'))); ?>
					</div>
				</div>
			</div>
			<div class="section-body">
				<?php echo $this->Form->create('Group');?>
				<div class="form-horizontal">
					<fieldset class="inputs">
						<legend>Group Information</legend>
						<div class="string control-group stringish" id="Login">
							<label class="control-label"><?php echo __('Name'); ?></label>
							<div class="controls">
							<?php
							echo $this->Form->input('id');
							echo $this->Form->input('name', array('label'=>false,'after'=>'</div>'));?>
						</div>
						<div class="string control-group stringish" id="Password">
							<label class="control-label"><?php echo __('Users in this group<br/>Press \'Control\' for multi-selection'); ?></label>
							<div class="controls">
							<?php
								echo $this->Form->input('User', array('style'=>'width: 15em;', 'label'=>false, 'after'=>'<span class="help-inline">Select users if you want to add them to this group.</span></div>'));
							?>
						</div>
					</fieldset>
					<fieldset class="form-actions">
						<?php echo $this->Form->end(array('div'=>false,'label'=>'Edit','class'=>'action input-action btn btn-success'));?>
						<?php echo $this->Html->link(__('View Rule'), array('action'=>'view', $this->Form->value('Group.id')), array('class'=>'btn btn-primary'));?>
						<a href="<?php echo $this->Html->url( array('controller'=> 'groups', 'action'=>'index')); ?>" class="btn btn-link">Cancel</a>
						<?php echo $this->Html->link(__('Delete'), array('action'=>'delete', $this->Form->value('Group.id')), array('class'=>'btn btn-danger'), sprintf(__('Are you sure you want to delete @%s?'), $this->Form->value('Group.name'))); ?>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>
