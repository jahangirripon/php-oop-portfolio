<?php
 $message ='';
 //require_once '../class/Product.php';
  //$obj_product = new Product();
    if(isset($_GET['status'])){
        $product_id= $_GET['id'];
        if($_GET['status']=='unpublish'){
            
           $message= $obj_product->unpublish_image_by_id($image_id);
        }else if ($_GET['status']=='publish') {
             $message= $obj_category->publish_image_by_id($image_id);
        }else if ($_GET['status']=='delete') {
             $message= $obj_category->delete_image_by_id($image_id);
        }
    }

    

    $query_result = $obj_gallery->select_all_gallery_info();

?>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center lead">
                Category Information
                <h3><?php echo $message;?></h3>
            </div>
            <?php
            if(isset($_SESSION['message'])){
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image Title</th>
                            <th>Image</th>
                            <th>Description</th>
                             <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($gallery_info=mysqli_fetch_assoc($query_result)) { 
                            extract($gallery_info);
                            ?>
                        <tr class="odd gradeX">
                            <td><?php echo $image_id;?></td>
                            <td><?php echo $image_title;?></td>
                            <td><img src="<?php echo $gallery_image;?>" height="150" width="200"></td>
                            <td><?php echo $image_description;?></td>
                            <td>
                                <?php 
                                if($gallery_info['publication_status']==1){
                                    echo 'Published';
                                } else {
                                    echo 'Unpublished';
                                }?>
                            </td>
                            <td class="center">
                                <?php 
                                if($gallery_info['publication_status']==1){ ?>
                                <a href="?status=unpublish&&id=<?php echo $image_id; ?>" class="btn btn-success" title="Publish">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                   <?php      } else {?> 
                                <a href="?status=publish&&id=<?php echo $image_id; ?>" class="btn btn-danger" title="Unpublish">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                   <?php } ?> 
                                <a href="edit_gallery.php?id=<?php echo $image_id; ?>" class="btn btn-info" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="?status=delete&&id=<?php echo $image_id; ?>" class="btn btn-danger" title="Delete" onclick="return check_delete_status()">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                               </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>