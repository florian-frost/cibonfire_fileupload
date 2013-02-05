
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php 
if( isset($fileupload) ) { $fileupload = (array)$fileupload; }
$id = isset($fileupload['id']) ? $fileupload['id'] : '';
?>
<div class="admin-box">
    <h3>fileupload</h3>
	<?php echo form_open_multipart($this->uri->uri_string(), 'class="form-horizontal"'); ?>
	<input type="hidden" name="id" value="" /><br />
    <fieldset>
    	<div class="form-actions">
    		<input id="image_field_name" type="file" name="image_field_name" maxlength="1000" value="" />
            <br/><br/>
            <input type="submit" name="save" class="btn btn-primary" value="Create fileupload" />
            or <?php echo anchor(SITE_AREA .'/content/fileupload', lang('fileupload_cancel'), 'class="btn btn-warning"'); ?>                                                
        </div>
    </fieldset>
    <?php echo form_close(); ?>
</div>
