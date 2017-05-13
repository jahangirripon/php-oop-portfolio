<?php
$image_id =$_GET['id'];
$query_result=$obj_gallery->select_gallery_info_by_id($image_id);
$gallery_info=mysqli_fetch_assoc($query_result);
extract($gallery_info);

if(isset($_POST['btn'])) {
    $message = $obj_gallery->update_gallery_info($_POST);
}


?>

<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <p class="lead text-success text-center">Edit Gallery Form</p>
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <form class="form-horizontal" action="" method="post" name="edit_category_form" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label col-lg-3">Image Name</label>
                    
                    <div class="col-lg-9">
                        <input type="text" name="image_title" required class="form-control" value="<?php echo $image_title;?>">
                        <input type="hidden" name="image_id" required class="form-control" value="<?php echo $image_id;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Upload Image</label>
                    
                    <div class="col-lg-9">
                         <input type="file" name="gallery_image">
                         <br><br>
                        <td><img src="<?php echo $gallery_image;?>" height="150" width="200"></td>
                        
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Image Description</label>
                    <div class="col-lg-9">
                        <textarea name="image_description" class="form-control" rows="10"><?php echo $image_description;?>
                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Publication Status</label>
                    <div class="col-lg-9">
                        <select name="publication_status" class="form-control">
                            <option>---Select Publication Status---</option>
                            <option value="1">Published</option>
                            <option value="0">Unpublished</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3"></label>
                    <div class="col-lg-9">
                        <input type="submit" name="btn" value="Update Image Info" class="btn btn-primary btn-block">
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
<script>
    document.forms['edit_category_form'].elements['publication_status'].value='<?php echo $category_info['publication_status'];?>';
</script>