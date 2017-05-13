<?php
    include 'includes/header.php';
    require 'class/View.php';
    $obj_view = new View();
    $query_result = $obj_view->select_all_published_portfolio_info();

?>

<div class="container">
    <div class="row" id="primary">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <body>

        <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">My Portfolio</h1>
	</section>
            <?php while ( $published_portfolio = mysqli_fetch_assoc($query_result)) { ?>
            <div class="w3-row-padding w3-margin-top">
                <div class="w3-third">
                    <div class="w3-card-2">
                        <img src="admin/<?php echo $published_portfolio['portfolio_image']; ?>" style="width:100%">
                        <div class="w3-container">
                            <h5><a href="<?php echo $published_portfolio['portfolio_link']; ?>"><?php echo $published_portfolio['portfolio_title']; ?></a></h5>
                        </div>
                    </div>
                </div>


                <?php } ?>
    </div>
</div>
</div>

<?php
include 'includes/footer.php';
?>