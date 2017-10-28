<?php
include_once"view/head.php"; 
?>
<section class="margin-top-21">
<div class="row">
	<div class="col-lg-8 slider-content" >
	<div class="w3-padding">
  <img class="mySlides w3-animate-right" src="image/bg1.jpg" style="width:100%">
  <img class="mySlides w3-animate-left" src="image/bg2.jpg" style="width:100%">
  <img class="mySlides w3-animate-right" src="image/bg3.jpg" style="width:100%">
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<div class="w3-container w3-padding">
  <div class="w3-panel w3-pale-blue w3-leftbar w3-rightbar w3-border-blue w3-center">
<a href="" class="link">
     	 <h2 class="text-uppercase">MIN 40 % OFf</h2>
      <span class="w3-large">Footware</span>
     </a>
  </div>
</div>
		</div>
		<div class="col-lg-6">
			<div class="w3-container w3-padding">
  <div class="w3-panel w3-pale-yellow w3-leftbar w3-rightbar w3-border-yellow w3-center">
     <a href="" class="link">
     	 <h2 class="text-uppercase">MIN 40 % OFf</h2>
      <span class="w3-large ">Footware</span>
     </a> 
  </div>
</div>
		</div>
	</div>
</div>
	</div>	
	<div class="col-lg-4">
		<div class=" w3-padding">
			<h5 class="text-uppercase feature-heading"><span class="heading-border">Shop</span> By</h5>
			<ul class="list-group shop-by">
				<li class="list-group-item">
					<a href="?view=viewProduct&gender=_kids" title="kids" ><img src="image/kids.webp"></a>
				</li>
				<li class="list-group-item"><a href="?view=viewProduct&gender=men"><img src="image/men.webp"></a>		</li><li class="list-group-item"><a href="?view=viewProduct&gender=women"><img src="image/women.webp"></a></li>
			</ul>
		</div>
	</div>	
</div>
</section><!-- first section-->
<section class="w3-container ">
	<div class="well" id="disp_pro_container"><div class="pull-right">
		<ul class="pagination pagination-sm" id="home_disp_jeans_page">
			<li><a><i class="fa fa-arrow-left"></i></a></li>
			<li><a href=""><i class="fa fa-arrow-right"></i></a></li>
		</ul>
	</div>
	<div class="row w3-margin" id="disp_jeans">
	</div>
	</div>
</section>
<section class="w3-container ">
	<div class="well" id="disp_pro_container"><div class="pull-right">
		<ul class="pagination pagination-sm" id="home_disp_jeans_page">
			<li><a><i class="fa fa-arrow-left"></i></a></li>
			<li><a href=""><i class="fa fa-arrow-right"></i></a></li>
		</ul>
	</div>
	<div class="row w3-margin" id="disp_shoes">
	</div>
	</div>
</section>
<?php 
include_once 'view/footer.php';
?>