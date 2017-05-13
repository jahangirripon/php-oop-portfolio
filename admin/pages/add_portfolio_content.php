<?php

  $message='';
        
    if(isset($_POST['btn'])){

        $message = $obj_portfolio->save_portfolio_image($_POST);
    }

?>
<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <p class="lead text-success text-center">Add Portfolio Form</p>
            <h3><?php echo $message; ?></h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label col-lg-3">Portfolio Title</label>
                    
                    <div class="col-lg-9">
                        <input type="text" name="portfolio_title" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Upload Portfolio Image</label>
                    
                    <div class="col-lg-9">
                        <input type="file" name="portfolio_image">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Site Link</label>
                    <div class="col-lg-9">
                        <textarea name="portfolio_link" class="form-control" rows="10"></textarea>
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
                        <input type="submit" name="btn" value="Save Portfolio" class="btn btn-primary btn-block">
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>