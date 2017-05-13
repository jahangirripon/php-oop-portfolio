<?php

$query_result = $obj_info->select_all_info_info();


?>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading text-center lead">
                Information
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th style="width: 450px;">Description</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while ($all_info=mysqli_fetch_assoc($query_result)) { ?>
                        <tr class="odd gradeX">
                            <td><?php echo $all_info['info_id'];?></td>
                            <td><?php echo $all_info['info_name'];?></td>
                            <td style="width: 450px;"><?php echo $all_info['info_description'];?></td>
                            <td class="center">
                                <?php if($all_info['info_type']=='mission'){
                                echo 'Mission';}
                                elseif ($all_info['info_type']=='vision') {
                                echo 'Vision';
                                }
                                else{
                                    echo "About";
                                    }?>
                            </td>
                            <td class="center">
                                <a href="edit_info.php?id=<?php echo $all_info['info_id']; ?>" class="btn btn-info" title="Edit"><span class="glyphicon glyphicon-edit">&nbsp;Edit</span></a>
                                
                                <!--
                                
                                <a href="?status=delete&&id=<?php echo $all_info['info_id']; ?>" 
                                class="btn btn-danger" title="Edit"><span class="glyphicon glyphicon-trash"></span></a>
                                -->

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