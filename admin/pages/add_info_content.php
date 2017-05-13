<?php

  $message='';
  
    if(isset($_POST['btn'])){
      
        $message = $obj_info->add_info($_POST);
    }

?>
<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <p class="lead text-success text-center">Add Information Form</p>
            <h3><?php echo $message;?></h3>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="well well-sm">
            <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label class="control-label col-lg-3">Info Name</label>
                    <div class="col-lg-9">
                        <input type="text" name="info_name" required class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Info Description</label>
                    <div class="col-lg-9">
                        <textarea name="info_description" class="form-control" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3">Info Type</label>
                    <div class="col-lg-9">
                        <select name="info_type" class="form-control">
                            <option>---Select Information Type---</option>
                            <option value="mission">Mission</option>
                            <option value="vision">Vision</option>
                            <option value="about">About</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-lg-3"></label>
                    <div class="col-lg-9">
                        <input type="submit" name="btn" value="Save Information" class="btn btn-primary btn-block">
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>