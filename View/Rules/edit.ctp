<?php $this->Html->addCrumb('New Rule', $this->Html->url( null, true )); ?>
<div id="content">
	<div class="container">
		<div class="section">
			<div class="section-header">
				<h3>Modify Rule</h3>
				<div class="section-actions">
					<?php echo $this->Html->link(__d('authake','View rule'), array('action'=>'view', $this->Form->value('Rule.id')), array('class'=>'btn btn-primary'));?>
					<a href="<?php echo $this->Html->url( array('controller'=> 'rules', 'action'=>'index')); ?>" class="btn btn-link">Cancel</a>
					<?php echo $this->Html->link(__d('authake','Delete'), array('action'=>'delete', $this->Form->value('Rule.id')), array('class'=>'btn btn-danger'), sprintf(__d('authake','Are you sure you want to delete @%s?'), $this->Form->value('Rule.name'))); ?>
				</div>
			</div>
			<div class="section-body">
				<?php echo $this->Form->create('Rule');?>
				<div class="form-horizontal">
					<fieldset class="inputs">
						<legend>Rule Information</legend>
						<div class="string control-group stringish" id="Login">
							<label class="control-label"><?php echo __d('authake','Description'); ?></label>
							<div class="controls">
							<?php 
							echo $this->Form->input('id');
							echo $this->Form->input('name', array('label'=>false, 'type'=>'textarea', 'cols'=>'50', 'rows'=>'2', 'after'=>'<span class="help-inline">Description of the Rule</span></div>'));?>
						</div>
						<div class="string control-group stringish" id="Password">
							<label class="control-label"><?php echo __d('authake','Group'); ?></label>
							<div class="controls">
							<?php echo $this->Form->input('group_id', array('label'=>false, 'empty'=>true, 'after'=>'<span class="help-inline">Groups that this Rule is applied</span></div>'));?>
						</div>
						<div class="string control-group stringish" id="Order">
							<label class="control-label"><?php echo __d('authake','Order'); ?></label>
							<div class="controls">
							<?php echo $this->Form->input('order', array('label'=>false, 'after'=>'<span class="help-inline">The order of importance.</span></div>'));?>
						</div>
						<div class="string control-group stringish" id="Group">
							<label class="control-label">Action <br /> (perl regex)</label>
							<div class="controls">
							<?php echo $this->Form->input('action', array('label'=>false, 'type'=>'textarea', 'cols'=>'50', 'rows'=>'3', 'after'=>'<span class="help-inline">Action that defines Rule. You can use Regular Expressions.</span>'));?>
							</div>
						</div>
						<div class="string control-group stringish" id="Group">
							<label class="control-label"><?php echo __d('authake','Permission'); ?></label>
							<div class="controls">
							<?php echo $this->Form->select('permission', array('1' => 'Allow', '0' => 'Deny'), array('label'=>false, 'empty'=>false, 'style'=>'width: 5em;','escape' => false,'between'=>'<div class="controls">'));?>
							<span class="help-inline">Permission Type. Allow / Deny</span>
							</div>
						</div>
						<div class="string control-group stringish" id="Group">
							<?php echo $this->Form->input('forward', array('label'=>array('text'=>__d('authake','Forward action on error'),'class'=>'control-label'),'between'=>'<div class="controls">', 'after'=>'<span class="help-inline">The route to be forwarded after allowed rule.</span></div>'));?>
						</div>
						<div class="string control-group stringish" id="Group">
							<?php echo $this->Form->input('message', array('label'=>array('text'=>__d('authake','Flash message on deny'),'class'=>'control-label'), 'type'=>'textarea', 'cols'=>'50', 'rows'=>'2','between'=>'<div class="controls">', 'after'=>'<span class="help-inline">Deny message on failed entry.</span></div>'));?>
						</div>
					</fieldset>
					<fieldset class="form-actions">
						<?php echo $this->Form->end(array('div'=>false,'label'=>'Edit','class'=>'action input-action btn btn-success'));?>
						<?php echo $this->Html->link(__d('authake','View Rule'), array('action'=>'view', $this->Form->value('Rule.id')), array('class'=>'btn btn-primary'));?>
						<a href="<?php echo $this->Html->url( array('controller'=> 'rules', 'action'=>'index')); ?>" class="btn btn-link">Cancel</a>
						<?php echo $this->Html->link(__d('authake','Delete'), array('action'=>'delete', $this->Form->value('Rule.id')), array('class'=>'btn btn-danger'), sprintf(__d('authake','Are you sure you want to delete @%s?'), $this->Form->value('Rule.name'))); ?>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
</div>