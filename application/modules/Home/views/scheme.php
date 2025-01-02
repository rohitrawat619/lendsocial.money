<section class="lendsocial-new-investment-banr">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 hidden-xs wow fadeInUp animated">
				<div class="row"><img src="<?php echo base_url('assets/img/landsocial/lendsocial-scheme-banr.png'); ?>"></div>
			</div>
			<div class="col-xs-12 hidden-lg hidden-md hidden-sm bizbanr-sm wow fadeInUp animated">
				<div class="row"><img src="<?php echo base_url('assets/img/landsocial/lendsocial-scheme-xsbanr.png'); ?>"></div>
			</div>
		</div>
	</div>
</section>
<!-- /Banner -->
  <!-- /.row -->

<!-- Content -->
<section class="lending-scheme-bg">
    <div class="container">
        <div class="row">
            <?php foreach ($schemes as $scheme): ?>
                <div class="col-md-6 col-xs-12 wow fadeInDown animated">
                    <div class="lending-scheme-boxlist">
                        <img src="<?php echo base_url('assets/img/landsocial/'.$scheme['logo_path']); ?>">
                        <h3 class="lending-scheme-boxlist-hd"><?php echo $scheme['name']; ?></h3>
                        <p class="lending-scheme-boxlist-key">
                            Min. Subscription Amount <span><?php echo 'INR ' . number_format($scheme['Min_Inv_Amount']); ?></span>
                        </p>
                        <p class="lending-scheme-boxlist-key">
                            Min. Subscription Amount <span><?php echo 'INR ' . number_format($scheme['Min_Inv_Amount']); ?></span>
                        </p>
                        <p class="lending-scheme-boxlist-key">
                            Max. Subscription Amount <span><?php echo 'INR ' . number_format($scheme['Max_Inv_Amount']); ?></span>
                        </p>
                        <p class="lending-scheme-boxlist-key">
                            Expected Return on Capital <span><?php echo $scheme['Interest_Rate']; ?></span>
                        </p>
                        <p class="lending-scheme-boxlist-key">
                            Lockin Period <span><?php echo $scheme['Lockin_Period'] . ' days'; ?></span>
                        </p>
                        <p class="lending-scheme-boxlist-para two-line-clamp"><?php echo $scheme['scheme_descripiton']; ?></p>
                        <!-- <a href="https://www.antworksp2p.com/LendSocial/signIn?q=<?php echo base64_encode(base64_encode($scheme['Vendor_ID']));?>&p=<?php echo base64_encode("lender");?>" class="btn-lending-scheme-detaillist">Lend Now</a> -->
                        <a href="<?php echo site_url('schemes-details/'.urlencode($this->encrypt->encode($scheme['partner_id']))); ?>" class="btn-lending-scheme-boxlist">Lend Now</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

