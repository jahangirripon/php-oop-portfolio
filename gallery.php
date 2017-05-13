<?php
    include 'includes/header.php';
    require 'class/View.php';
    $obj_view = new View();
    $query_result = $obj_view->select_all_published_gallery_info();

?>


<link rel="stylesheet" href="assets\frontend\w3\w3.css">

<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-quarter img{padding:10px;cursor:pointer;width: 31%;}
.w3-quarter img:hover{opacity:0.6;transition:0.3s}
</style>
<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">Gallery</h1>
	</section>
<div class="w3-main w3-content" style="max-width:900px;margin-top:83px">
  
  <!-- Photo grid -->
  <?php while ( $published_gallery = mysqli_fetch_assoc($query_result)) { ?>
  <div class="w3-grayscale-min">
      
    <div class="w3-quarter">
        
      <img src="admin/<?php echo $published_gallery['gallery_image']; ?>" style="width:100%" onclick="onClick(this)" alt="Canoeing again">
      
    </div>
  </div>
  <?php } ?>
  
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-black w3-padding-0" onclick="this.style.display=&#39;none&#39;" style="display: none;">
    <span class="w3-closebtn w3-text-white w3-opacity w3-hover-opacity-off w3-xxlarge w3-container w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image" src="./W3.CSS Template_files/man_bench.jpg">
      <p id="caption">Waiting for the bus in the desert</p>
    </div>
  </div>
  

<!-- End page content -->
</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementById("mySidenav").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidenav").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>



</body></html>

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