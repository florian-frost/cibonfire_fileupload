<ul class="nav nav-pills">
	<li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
		<a href="<?php echo site_url(SITE_AREA .'/developer/fileupload') ?>" id="list"><?php echo lang('fileupload_list'); ?></a>
	</li>
	<?php if ($this->auth->has_permission('Fileupload.Developer.Create')) : ?>
	<li <?php echo $this->uri->segment(4) == 'create' ? 'class="active"' : '' ?> >
		<a href="<?php echo site_url(SITE_AREA .'/developer/fileupload/create') ?>" id="create_new"><?php echo lang('fileupload_new'); ?></a>
	</li>
	<?php endif; ?>
</ul>