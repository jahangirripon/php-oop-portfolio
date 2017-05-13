<?php
 $message ='';
    if(isset($_GET['status'])){
        $portfolio_id= $_GET['id'];
        if($_GET['status']=='unpublish'){
            
           $message= $obj_portfolio->unpublish_portfolio_by_id($portfolio_id);
        }else if ($_GET['status']=='publish') {
             $message= $obj_portfolio->publish_portfolio_by_id($portfolio_id);
        }else if ($_GET['status']=='delete') {
             $message= $obj_portfolio->delete_portfolio_by_id($portfolio_id);
        }
    }

    

    $query_result = $obj_portfolio->select_all_portfolio_info();

?>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center lead">
                Portfolio Information
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
                            <th>Title</th>
                            <th>Image</th>
                            <th>Link</th>
                             <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($portfolio_info=mysqli_fetch_assoc($query_result)) { 
                            extract($portfolio_info);
                            ?>
                        <tr class="odd gradeX">
                            <td><?php echo $portfolio_id;?></td>
                            <td><?php echo $portfolio_title;?></td>
                            <td><img src="<?php echo $portfolio_image;?>" height="150" width="200"></td>
                            <td><?php echo $portfolio_link;?></td>
                            <td>
                                <?php 
                                if($portfolio_info['publication_status']==1){
                                    echo 'Published';
                                } else {
                                    echo 'Unpublished';
                                }?>
                            </td>
                            <td class="center">
                                <?php 
                                if($portfolio_info['publication_status']==1){ ?>
                                <a href="?status=unpublish&&id=<?php echo $portfolio_id; ?>" class="btn btn-success" title="Publish">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                   <?php      } else {?> 
                                <a href="?status=publish&&id=<?php echo $portfolio_id; ?>" class="btn btn-danger" title="Unpublish">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                   <?php } ?> 
                                <a href="edit_portfolio.php?id=<?php echo $portfolio_id; ?>" class="btn btn-info" title="Edit">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="?status=delete&&id=<?php echo $portfolio_id; ?>" class="btn btn-danger" title="Delete" onclick="return check_delete_status()">
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