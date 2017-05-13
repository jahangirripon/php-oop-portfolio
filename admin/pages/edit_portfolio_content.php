<?php
$portfolio_id =$_GET['id'];
$query_result=$obj_portfolio->select_portfolio_info_by_id($portfolio_id);
$portfolio_info=mysqli_fetch_assoc($query_result);
extract($portfolio_info);

if(isset($_POST['btn'])) {
    $message = $obj_portfolio->update_portfolio_info($_POST);
}


?>

<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <p class="lead text-success text-center">Edit Portfolio Form</p>
            
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <form class="form-horizontal" action="" method="post" name="edit_category_form" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label col-lg-3">Portfolio Name</label>
                    
                    <div class="col-lg-9">
                        <input type="text" name="portfolio_title" required class="form-control" value="<?php echo $portfolio_title;?>">
                        <input type="hidden" name="portfolio_id" required class="form-control" value="<?php echo $portfolio_id;?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Upload Portfolio Image</label>
                    
                    <div class="col-lg-9">
                         <input type="file" name="portfolio_image">
                         <br><br>
                        <td><img src="<?php echo $portfolio_image;?>" height="150" width="200"></td>
                        
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Site Link</label>
                    <div class="col-lg-9">
                        <textarea name="portfolio_link" class="form-control" rows="10"><?php echo $portfolio_link;?>
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
                        <input type="submit" name="btn" value="Update Portfolio Info" class="btn btn-primary btn-block">
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
<script>
    document.forms['edit_category_form'].elements['publication_status'].value='<?php echo $category_info['publication_status'];?>';
</script>