<div class="container">
	<div class="row">
		<div class="span12">
			<ul class="breadcrumb">
				<li><i class="icon-envelope"></i> <?php echo $this->lang->line('clarifications'); ?></li>
				<li><span class="divider">|</span></li>
				<li><i class="icon-list-alt"></i> <?php echo $this->lang->line('clarification'); ?> <?php echo $clarification['id']; ?></li>
				
			</ul>
		</div>
	</div>
	
	<div class="row">
		<div class="span12">
			<h3><?php echo $this->lang->line('general_info'); ?></h3>
			<table class="table table-bordered table-striped">
				<thead>
					<tr><th class="clarification-info-th"><?php echo $this->lang->line('info'); ?></th><th><?php echo $this->lang->line('value'); ?></th></tr>
				</thead>
				<tbody>
					<tr><td><i class="icon-fire"></i> <?php echo $this->lang->line('contest'); ?></td><td><?php echo $clarification['contest_name']; ?></td></tr>
					<tr><td><i class="icon-user"></i> <?php echo $this->lang->line('by'); ?></td><td><?php echo $clarification['user_id'] == 1 ? '<span class="label label-important">Administrator</span>' : $clarification['user_name']; ?></td></tr>
					<tr><td><i class="icon-time"></i> <?php echo $this->lang->line('time'); ?></td><td><?php echo $clarification['clar_time']; ?></td></tr>
				</tbody>
			</table>

			<h3><?php echo $this->lang->line('title'); ?></h3>
			<?php echo htmlspecialchars($clarification['title']); ?>
			<h3><?php echo $this->lang->line('content'); ?></h3>
			<div class="well">
				<?php echo nl2br(htmlspecialchars($clarification['content'])); ?>
			</div>
			<form method="post">
			<?php if ($clarification['user_id'] != 1) : ?>

				<h3><?php echo $this->lang->line('the_answer'); ?></h3>
				
				<div class="control-group<?php echo form_error('form[answer]') == '' ? '' : ' error'; ?>">
					<div class="controls">
						<textarea name="form[answer]" type="text" class="span4"><?php echo set_value('form[answer]', @$clarification['answer']); ?></textarea>
						<span class="help-inline"><?php echo form_error('form[answer]'); ?></span>
					</div>
				</div>
			<?php endif; ?>
				<div class="form-actions">
					<?php if ($clarification['user_id'] != 1) : ?>
						<button type="submit" class="btn btn-danger"><i class="icon-download-alt icon-white"></i> <?php echo $clarification['answer'] ? $this->lang->line('save') : $this->lang->line('answer'); ?></i></button>
					<?php endif; ?>
					<a class="btn" href="<?php echo site_url('admin/clarification/viewAll/' . $contest_id . '/' . $user_id . '/' . $page_offset); ?>"><?php echo $this->lang->line('back'); ?></a>
				</div>
			</form>
		</div>
	</div>
</div>