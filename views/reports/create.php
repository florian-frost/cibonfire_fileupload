
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
            <input type="submit" name="save" class="btn btn-primary" value="Create fileupload" />
            or <?php echo anchor(SITE_AREA .'/reports/fileupload', lang('fileupload_cancel'), 'class="btn btn-warning"'); ?>
            
        </div>
    </fieldset>
    <?php echo form_close(); ?>


</div>
