<section class="lendsocial-inner-banr">
	<div class="container">
		<div class="row">
			<div class="container">
				<h2 class="lending-scheme-boxlist-hd"><?= $scheme_details['Scheme_Name']; ?></h2>
			</div>
		</div>
	</div>
</section>
<!-- /Banner -->

  <!-- /.row -->

<section class="lending-scheme-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 wow fadeInDown animated">
				<div class="lending-scheme-detaillist">
					<!-- <img src="../../assets/img/landsocial/icon-arrow.png"> -->
					<!-- <h3 class="lending-scheme-boxlist-hd"><?= $scheme_details['Scheme_Name']; ?></h3> -->
					<p class="lending-scheme-detaillist-key">Scheme Category <span><?= $scheme_details['Interest_Type']; ?></span></p>
					<p class="lending-scheme-detaillist-key">Launch Date <span><?= $scheme_details['launch_date']; ?></span></p>
					<p class="lending-scheme-detaillist-key">Closure Date <span><?= $scheme_details['closure_date']; ?></span></p>
					<p class="lending-scheme-detaillist-key">Min. Subscription Amount  <span><?= $scheme_details['Min_Inv_Amount']; ?></span></p>
					<p class="lending-scheme-detaillist-key">Max. Subscription Amount  <span><?= $scheme_details['Max_Inv_Amount']; ?></span></p>
					<p class="lending-scheme-detaillist-key">Expected Return on Capital  <span><?= $scheme_details['Interest_Rate']; ?></span></p>
					<p class="lending-scheme-detaillist-key">Draw Down  <span><?= $scheme_details['draw_down']; ?></span></p> 
					<p class="lending-scheme-boxlist-para"><strong>Risk Catagory :</strong> <?= $scheme_details['risk_category']; ?></p>
					<p class="lending-scheme-boxlist-para"><strong>Investment Philosophy :</strong> <?= $scheme_details['investment_philosophy']; ?></p>
					<p class="lending-scheme-boxlist-para"><strong>Scheme Management :</strong> <?= $scheme_details['scheme_descripiton']; ?></p>
					<a href="https://www.antworksp2p.com/LendSocial/signIn?q=<?php echo base64_encode(base64_encode($scheme_details['Vendor_ID']));?>&p=<?php echo base64_encode("lender");?>" class="btn-lending-scheme-detaillist">Lend Now</a>
				</div>
			</div>
		</div>
	</div>
</section>