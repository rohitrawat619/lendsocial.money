<section class="lendsocial-new-investment-banr">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 hidden-xs wow fadeInUp animated">
			<img src="<?php echo base_url('assets/img/landsocial/lendsocial-new-banr.png'); ?>" alt="lendsocial-new-banr.png">
			</div>
			<div class="col-xs-12 hidden-lg hidden-md hidden-sm bizbanr-sm wow fadeInUp animated">
			<img src="<?php echo base_url('assets/img/landsocial/lendsocial-new-xsbanr.png'); ?>" alt="lendsocial-new-xsbanr.png">
			</div>
		</div>
	</div>
</section>
<!-- /Banner -->
  <!-- /.row -->
   
<!-- Content -->
<section class="lendsocial-new-howitwork">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center">
				<h2 class="lendsocial-new-hd wow fadeInDown animated">How it Work</h2>
				<p class="lendsocial-new-subhd wow fadeInUp animated">Welcome to lend-social. An easiest way of getting your Loan Disbursed.</p>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="row">	
					<div class="col-md-4 col-xs-6 wow fadeInUp animated">
						<div class="icon-box">
							<img  src="<?php echo base_url('assets/img/landsocial/instant-reg.png'); ?>">
							<p>Instant Registration</p>
						</div>
					</div>	
					<div class="col-md-4 col-xs-6 wow fadeInDown animated">
						<div class="icon-box">
							<img src="<?php echo base_url('assets/img/landsocial/online-kyc.png'); ?>" alt="online-kyc.png">
					
							<p>Online <span>KYC</span></p>
						</div>
					</div>	
					<div class="col-md-4 col-xs-6 wow fadeInUp animated">
						<div class="icon-box">
							<img src="<?php echo base_url('assets/img/landsocial/loan-proposal.png'); ?>">
							<p>Choose Loan Proposal</p>
						</div>
					</div>	
					<div class="col-md-4 col-xs-6 wow fadeInDown animated">
						<div class="icon-box">
							<img src="<?php echo base_url('assets/img/landsocial/e-sign.png'); ?>">
							<p>E-Sign Loan Agreement</p>
						</div>
					</div>	
					<div class="col-md-4 col-xs-6 wow fadeInUp animated">
						<div class="icon-box">
							<img src="<?php echo base_url('assets/img/landsocial/lender-signs.png'); ?>">
							<p>Lender Signs Contract</p>
						</div>
					</div>	
					<div class="col-md-4 col-xs-6 wow fadeInDown animated">
						<div class="icon-box">
							<img src="<?php echo base_url('assets/img/landsocial/get-disbursal.png'); ?>">
							<p>Get <span>Disbursal</span></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1 col-xs-12"></div>
			<div class="col-md-5 col-xs-12 wow fadeInUp animated">
				<img src="<?php echo base_url('assets/img/landsocial/how-it-work.png'); ?>" class="img-responsive">
			</div>
		</div>
	</div>
</section>

<!-- Content -->
<section class="borrower-bg ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 text-center">
                <h2 class="lendsocial-new-hd wow fadeInDown animated">Borrow as per fit</h2>
                <p class="lendsocial-new-subhd wow fadeInUp animated">
                    Scroll to choose borrow from the available program as per your Profile & get 
                    <span>an instant decisioning / Disbursal of Loan</span>
                </p>
            </div>
            <div class="col-md-1 col-xs-12"></div>
            <div class="col-md-10 col-xs-12">
			   <?php 
					if(!empty($schemes)){
						?>
                <div id="fit-borrower" class="owl-carousel owl-theme wow fadeInUp animated">
						<?php
                    foreach ($schemes as $val){ 
					?>
					<div class="item">
                        <div class="row">
                                <div class="col-md-12 col-12"> <!-- Adjust grid column for responsiveness -->
                                    <div class="borrow-boxlist">
                                        <p class="borrow-boxlist-scheme">Scheme: <?= $val['Scheme_Name']; ?></p>
                                        <p class="borrow-boxlist-subhd two-line-clamp"><?= $val['scheme_descripiton']; ?></p>
                                        <p class="borrow-boxlist-listhd">Borrower Classification</p>
                                        <ul class="borrow-boxlist-keys">
											<li>Purpose : <?= $val['Purpose']; ?></li>
											<li>Location : <?= $val['Location']; ?></li>
											<li>Loan Amount: <?= $val['Loan_Amount']; ?> </li>
                                            <li>ROI: <?= $val['Interest_Rate']; ?> p.a.</li>
                                            <li>Maximum Tenure: <?= $val['Tenure']; ?> Months</li>
                                        </ul>
                                        <a href="#" class="btn-borrow-boxlist">Borrow Now</a>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <?php 
					} 
                    ?>
                </div>
				  <?php 
					 } else{
                    ?>
					<div class="col-md-12 col-xs-12 text-center">
                            <p>No lending programs are available at the moment.</p>
                        </div>
					 <?php }?>
            </div>
            <div class="col-md-12 col-xs-12 text-center wow fadeInUp animated">
                <a href="#" class="btn-browse-more">Browse More</a>
            </div>
        </div>
    </div>
</section> 

<!-- Content -->
<section class="lending-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12 text-center">
                <h2 class="lendsocial-new-hd wow fadeInDown animated">Lending Programs</h2>
                <p class="lendsocial-new-subhd wow fadeInUp animated">Be the Bank. Lend to the universe of qualified borrowers</p>
            </div>
            <div class="col-md-12 col-xs-12">
			<?php
            // print_r($schemes);exit;
			if (!empty($schemes)){ ?>
                <div id="lending-programs" class="owl-carousel owl-theme wow fadeInUp animated">
                        <?php 
                        //pr($schemes);exit;
                        foreach ($schemes as $val){
                        ?>
						<div class="">
                        <div class="item">
                            <div class="lending-boxlist">       
                                <img src="<?php echo base_url('assets/img/landsocial/'.$val['logo_path']); ?>" alt="Icon">
                                <h3 class="lending-boxlist-hd"><?php echo $val['Scheme_Name']; ?></h3>
                                <p class="lending-boxlist-key">Min. Subscription Amount <span><?php echo 'INR ' . number_format($val['Min_Inv_Amount']); ?></span></p>
                                <p class="lending-boxlist-key">Max. Subscription Amount <span><?php echo 'INR ' . number_format($val['Max_Inv_Amount']); ?></span></p>
                                <p class="lending-boxlist-key">Expected Return on Capital <span><?php echo $val['Interest_Rate']; ?> p.a.</span></p>
                                <p class="lending-boxlist-para two-line-clamp"><?php echo $val['scheme_descripiton']; ?></p>
								<a href="<?php echo site_url('schemes-details/'.urlencode($this->encrypt->encode($val['partner_id']))); ?>" class="btn-lending-scheme-boxlist">Lend Now</a>
                            </div>
                        </div>
						</div>
                        <?php 
						}
                        ?>
                </div>
				<?php } else{ ?>
                        <div class="col-md-12 col-xs-12 text-center">
                            <p>No lending programs are available at the moment.</p>
                        </div>
                    <?php } ?>
            </div>
            <div class="col-md-12 col-xs-12 text-center wow fadeInUp animated">
                <a href="<?php echo site_url('get_schemes'); ?>" class="btn-browse-more">Browse More</a>
            </div>
        </div>
    </div>
</section>

<!-- Content -->
<section class="lendsocial-new-testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 text-center">
				<h2 class="lendsocial-new-hd wow fadeInDown animated">Testimonials</h2>
			</div>
			<div class="col-md-12 col-xs-12">
				<div class="owl-carousel owl-theme lendsocial-new-testimonials wow fadeInUp animated">
					<div class="item">
						<img src="<?php echo base_url('assets/img/landsocial/user.png'); ?>" >
						<p class="para-testimonials">We express our gratitude to you for your high responsibility, understanding, and desire to help in any situation! I also want to note the competence and efficiency. We look forward to fruitful and long-term cooperation!</p>
						<p class="quote-testimonials"><img src="<?php echo base_url('assets/img/landsocial/icon-quote.png'); ?>"></p>
						<p class="name-testimonials">George Carroll</p>
					</div>
					<div class="item">
						<img src="<?php echo base_url('assets/img/landsocial/user.png'); ?>" >
						<p class="para-testimonials">We express our gratitude to you for your high responsibility, understanding, and desire to help in any situation! I also want to note the competence and efficiency. We look forward to fruitful and long-term cooperation!</p>
						<p class="quote-testimonials"><img src="<?php echo base_url('assets/img/landsocial/icon-quote.png'); ?>"></p>
						<p class="name-testimonials">George Carroll</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>