<?php
$info_id =$_GET['id'];
$query_result=$obj_info->select_all_info_by_id($info_id);
$all_info=mysqli_fetch_assoc($query_result);
extract($all_info);

if(isset($_POST['btn'])) {
    $message = $obj_info->update_all_info($_POST);
}


?>

<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <p class="lead text-success text-center">Edit Information Form</p>
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <form class="form-horizontal" action="" method="post" name="edit_info_form">
                <div class="form-group">
                    <label class="control-label col-lg-3">Info Name</label>
                    
                    <div class="col-lg-9">
                        <input type="text" name="info_name" required class="form-control" value="<?php echo $info_name;?>">
                        <input type="hidden" name="info_id" required class="form-control" value="<?php echo $info_id;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Info Description</label>
                    <div class="col-lg-9">
                        <textarea name="info_description" class="form-control" rows="10"><?php echo $info_description;?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Info type</label>
                    <div class="col-lg-9">
                        <select name="info_type" class="form-control">
                            <option><?php echo $info_type;?></option>
                            <option value="mission">Mission</option>
                            <option value="vision">Vision</option>
                            <option value="about">About</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3"></label>
                    <div class="col-lg-9">
                        <input type="submit" name="btn" value="Update Info" class="btn btn-primary btn-block">
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
<script>
    //document.forms['edit_info_form'].elements['publication_status'].value='<?php echo $category_info['publication_status'];?>';
</script>