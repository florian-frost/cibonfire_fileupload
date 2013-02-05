
<?php if (validation_errors()) : ?>
<div class="alert alert-block alert-error fade in ">
  <a class="close" data-dismiss="alert">&times;</a>
  <h4 class="alert-heading">Please fix the following errors :</h4>
 <?php echo validation_errors(); ?>
</div>
<?php endif; ?>
<?php // Change the css classes to suit your needs
if( isset($fileupload) ) {
    $fileupload = (array)$fileupload;
}
$id = isset($fileupload['id']) ? $fileupload['id'] : '';
?>
<div class="admin-box">
    <h3>fileupload</h3>
<?php echo form_open($this->uri->uri_string(), 'class="form-horizontal"'); ?>
    <fieldset>



        <div class="form-actions">
            <br/>
            <input type="submit" name="save" class="btn btn-primary" value="Edit fileupload" />
            or <?php echo anchor(SITE_AREA .'/reports/fileupload', lang('fileupload_cancel'), 'class="btn btn-warning"'); ?>
            

    <?php if ($this->auth->has_permission('Fileupload.Reports.Delete')) : ?>

            or <button type="submit" name="delete" class="btn btn-danger" id="delete-me" onclick="return confirm('<?php e(js_escape(lang('fileupload_delete_confirm'))); ?>')">
            <i class="icon-trash icon-white">&nbsp;</i>&nbsp;<?php echo lang('fileupload_delete_record'); ?>
            </button>

    <?php endif; ?>


        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
