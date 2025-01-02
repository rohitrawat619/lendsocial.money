<footer class="container-fluid lendsocial-new-fotr">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-xs-12 fotr-logo wow fadeInDown animated">
				<img src="<?php echo base_url('assets/img/landsocial/lendsocial-logo-w.png'); ?>">
			</div>
			<div class="col-md-6 col-xs-12 wow fadeInLeft animated">
				<h4>Menu</h4>
				<ul class="wow fadeInUp animated lendsocial-new-usefullinks">
					<li><a href="#">Home</a></li>
					<li><a href="#">Service</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-12 wow fadeInRight animated">
				<h4>Say Hello</h4>
				<ul class="lendsocial-new-social">
					<li><a href="#">https://lendsocial.money</a></li>
					<li><a href="#">info@lendsocial.money</a></li>
				</ul>
			</div>
			<div class="col-md-3 col-xs-12 wow fadeInLeft animated">
				<h4>follow us on</h4>
				<ul class="lendsocial-new-sociallinks">
					<li><a target="_blank" href="https://www.facebook.com/Lendsocial" rel="noopener"><i class="fa fa-facebook"></i></a></li>
					<li><a target="_blank" href="https://twitter.com/AntworksMoney" rel="noopener"><i class="fa fa-twitter"></i></a></li>
					<li><a target="_blank" href="https://www.linkedin.com/company/antworks-money-llp" rel="noopener"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
			<div class="col-md-12 col-xs-12 wow fadeInDown animated">
				<p class="disclaim justify"><strong>Disclaimer:</strong> Reserve Bank of India does not accept any responsibility for the correctness of any of the statements or representations made or opinions expressed by Antworks P2P Financing Private Limited, and does not provide any assurance for repayment of the loans lent on it. Antworks P2P Financing Private Limited is having a valid certificate of registration dated April 01, 2019 issued by the Reserve Bank of India under Section 45 IA of the Reserve Bank of India Act, 1934. However, the RBI does not accept any responsibility or guarantee about the present position as to the financial soundness of the company or for the correctness of any of the statements or representations made or the opinions expressed by the company and for repayment of deposits / discharge of liabilities by the company. The information contained herein is only to enable the Lender to make a considered decision. Any decision taken by the Lender on the basis of this information is the sole responsibility of the Lender and Antworks P2P Financing is not liable. This information does not include any sensitive personal data or information of the Borrower. Antworks P2P Financing only facilitates a virtual meeting place between the Borrowers and the Lenders on its online platform. The decision to lend is entirely at the discretion of the Lender and Antworks P2P Financing does not guarantee that the Borrowers will receive any loans from the Lenders. Antworks P2P Financing merely aids and assist the Lenders and the Borrowers listed on its website to make and receive loans and charges a service fee from the Lenders and the Borrowers for such assistance. Antworks P2P Fianncing is only an ‘Intermediary’ under the provisions of the Information Technology Act, 1999.</p>
			</div>
			<div class="col-md-12 col-xs-12 rights wow fadeInUp animated">
				<p>lend-social &copy; 2024. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</footer>

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="https://www.antworksmoney.com/assets/js/wow.min.js"></script>
<script>
   $("#fit-borrower").owlCarousel({
    pagination : false,
		items:1,
		loop:true,
		margin:30,
		dots:true,
		nav:false,
		autoplay:true,
		autoplayTimeout:10000,
		autoplayHoverPause:false,
		responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
});
</script>
<script>
   $("#lending-programs").owlCarousel({
    pagination : false,
                items:1,
                loop:true,
                margin:30,
                dots:true,
                nav:false,
                autoplay:true,
                autoplayTimeout:10000,
                autoplayHoverPause:false,
                responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:3
        }
    }
});
</script>
<script>
$('.owl-carousel').owlCarousel({
    pagination : false,
	items:1,
	loop:true,
	margin:10,
	dots:true,
	nav:false,
	autoplay:true,
	autoplayTimeout:10000,
	autoplayHoverPause:false,
	responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});
</script>

<script>
new WOW().init();
	//smoothScroll
	smoothScroll.init();
</script>
</body>
</html>