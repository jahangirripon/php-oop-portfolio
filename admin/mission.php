<?php
    include './includes/header.php';
?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Mission</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="">
                      <div class="form-group">
                        <label for="mission_title">Title</label>
                        <input type="text" class="form-control" id="mission_title" name="mission_title" placeholder="Enter Title">
                      </div>
                      <div class="form-group">
                        <label for="mission_description">Description</label>
                        <textarea class="form-control" id="mission_description" name="mission_description" rows="5"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="publication_status">Publication Status</label>
                        <select class="form-control" id="publication_status" name="publication_status">
                          <option>Published</option>
                          <option>Unpublished</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary btn-block">Add</button>
                    </form>
                </div>
                
            </div>
        </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
