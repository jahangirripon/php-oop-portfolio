<?php
require 'class/View.php';
$obj_view = new View();

include 'includes/header.php';
$query_result = $obj_view->select_all_published_about_info();
?>

<div class="container">
    <div class="row" id="primary">
        <div id="content" class="col-sm-8">
            <?php while ($about_info = mysqli_fetch_assoc($query_result)) { ?>
            
            <img src="assets/frontend/img/aboutme.png" style="align-content: center;margin-left: 100px;">
            <img src="assets/frontend/img/jahangir.jpg" style="align-content: center;margin-left: 150px;">
            <h1><?php echo $about_info['info_name'];?></h1>
            <p><?php echo $about_info['info_description'];?></p>
            <?php } ?>
        </div>


        <aside class="col-sm-4">
            <div class="widget">
                <h4>Join our mailing list</h4>
                <p>To keep up with latest news</p>
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#mymodal">Click here to subscribe</button>
            </div>
            <div class="widget">
                <form role="form" class="search-form">
                    <label for="sidebar-search" class="sr-only">Search the blog</label>
                    <input type="text" id="sidebar-search" placeholder="Search the blog"></input>
                </form>
            </div>
            <div class="widget">
                <h4>About me</h4>
                <p>I am a simple guy from Bangladesh</p>
            </div>
            <div class="widget">
                <h4>Recent post</h4>
                <ul>
                    <li><a href="">Post one</a></li>
                    <li><a href="">Post one</a></li>
                    <li><a href="">Post one</a></li>
                    <li><a href="">Post one</a></li>
                    <li><a href="">Post one</a></li>
                </ul>
            </div>
            <div class="widget">
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Technology</a></li>
                    <li><a href="">Life</a></li>
                    <li><a href="">Politics</a></li>
                    <li><a href="">Gaming</a></li>
                    <li><a href="">Others</a></li>
                </ul>
            </div>
        </aside>
    </div>
</div>

<!------- blog content------>
<div class="container">
    <div class="row" id="primary">
        <main id="content" class="col-sm-8">

        </main>
    </div>
</div>
<?php
include 'includes/footer.php';
?>