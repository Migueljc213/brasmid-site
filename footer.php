<!--==================================================-->
<!-- Start techno Footer Middle Area -->
<!--==================================================-->
<div class="footer-middle">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="widget-widgets-company-info white">
					<div class="techno-logo">
						<a class="logo_img" href="index.html" title="techno">
							<img src="./assets/images/logo.png" alt="" />
						</a>
					</div>
					<div class="company-info-desc">
						<p>Empresa de desenvolvimento de software e marketing digital.</p>
					</div>
					<div class="company_icon">
						<a href="https://www.facebook.com/brasmid"><i class="fab fa-facebook-f"></i></a>
						<a href="https://www.linkedin.com/company/brasmid-sistemas/"><i class="fab fa-linkedin-in"></i></a>

					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-12">
				<div class="widget widget-nav-menu">
					<h4 class="widget-title"><span>S</span>oluções</h4>
					<div class="menu-quick-link-content">
						<ul class="menu">
							<li><a href="#">Website</a></li>
							<li><a href="#">Hospedagem</a></li>
							<li><a href="#">Tréfego Pago </a></li>
							<li><a href="#">Mídia Social</a></li>
							<li><a href="#">Automações</a></li>
							<li><a href="#">Lançamentos de Produtos</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="widget-footer-title">
					<h4 class="widget-title"><span>S</span>istemas</h4>
				</div>
				<div class="footer-recent-post">
					<ul class="menu">
						<li><a href="#">Empresarial - ERP</a></li>
						<li><a href="">Loja Virtual</a></li>
						<li><a href="">Ensino - EAD</a></li>
						<li><a href="#">Gestão de Clínicas</a></li>
						<li><a href="#">Gestão de Igrejas</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div id="footer-widget-address">
					<h4 class="widget-title"><span>C</span>ONTATOS</h4>
					<div class="footer-inner">
						<div class="footer-socail-icon">
							<i class="flaticon-call"></i>
						</div>
						<div class="footer-socail-info">
							<p>
								<span>+55 (24) 99941-7827</span>
							</p>
						</div>
					</div>
					<div class="footer-inner">
						<div class="footer-socail-icon">
							<i class="icon flaticon-email"></i>
						</div>
						<div class="footer-socail-info">
							<p>contato@brasmid.com.br</p>
						</div>
					</div>
					<div class="footer-inner">
						<div class="footer-socail-icon">
							<i class="icon flaticon-placeholder-1"></i>
						</div>
						<div class="footer-socail-info2">
							<p>Avenida General Miguel Costa 246b Vila Mury - RJ</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row footer-bottom">
			<div class="col-lg-6 col-md-6">
				<div class="footer-bottom-content">
					<div class="footer-bottom-content-copy">
						<p>Copyright © 2021. All rights reserved to <span>BRASMID TECNOLOGIA</span></p>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!--==================================================-->
<!-- End techno Footer Middle Area -->
<!--==================================================-->
<script>
	$(window).on('scroll', function() {
		var scrolled = $(window).scrollTop();
		if (scrolled > 300) $('.go-top').addClass('active');
		if (scrolled < 300) $('.go-top').removeClass('active');
	});

	$('.go-top').on('click', function() {
		$("html, body").animate({
			scrollTop: "0"
		}, 1200);
	});
</script>
<script>
	const typebotInitScript = document.createElement("script");
	typebotInitScript.type = "module";
	typebotInitScript.innerHTML = `import Typebot from 'https://cdn.jsdelivr.net/npm/@typebot.io/js@0.2.31/dist/web.js'

Typebot.initBubble({
  typebot: "brasmid-tecnologia",
  apiHost: "https://viewer.nixs.com.br",
  previewMessage: {
    message: "Oi, fale conosco!",
    autoShowDelay: 1000,
    avatarUrl: "https://cdn-icons-png.flaticon.com/512/3398/3398643.png",
  },
  theme: {
    button: { backgroundColor: "#15c163", iconColor: "#FFFFFF", size: "large" },
    previewMessage: {
      backgroundColor: "#598E71",
      textColor: "#FFFFFF",
      closeButtonBackgroundColor: "#666460",
      closeButtonIconColor: "#666460",
    },
  },
});
`;
	document.body.append(typebotInitScript);
</script>
<!-- jquery js -->
<script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
<!-- bootstrap js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- carousel js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- counterup js -->
<script src="assets/js/jquery.counterup.min.js"></script>
<!-- waypoints js -->
<script src="assets/js/waypoints.min.js"></script>
<!-- wow js -->
<script src="assets/js/wow.js"></script>
<!-- imagesloaded js -->
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<!-- venobox js -->
<script src="venobox/venobox.js"></script>
<!-- ajax mail js -->
<script src="assets/js/ajax-mail.js"></script>
<!--  animated-text js -->
<script src="assets/js/animated-text.js"></script>
<!-- venobox min js -->
<script src="venobox/venobox.min.js"></script>
<!-- isotope js -->
<script src="assets/js/isotope.pkgd.min.js"></script>
<!-- jquery nivo slider pack js -->
<script src="assets/js/jquery.nivo.slider.pack.js"></script>
<!-- jquery meanmenu js -->
<script src="assets/js/jquery.meanmenu.js"></script>
<script src="assets/js/popper.min.js"></script>
<!-- jquery scrollup js -->
<script src="assets/js/jquery.scrollUp.js"></script>
<!-- slick js -->
<script src="assets/js/theme.js"></script>
<!-- slick js -->
<script src="assets/js/slick.js"></script>
<!-- slick js -->
<script src="assets/js/slick.min.js"></script>
<!-- jquery js -->
<script src="assets/js/jquery.barfiller.js"></script>
<!-- jquery js -->
<script>
    $(document).ready(function() {
        $('#bar3').barfiller({
            duration: 7000
        });
        $('#bar4').barfiller({
            duration: 7000
        });
    });
</script>
<!--faq jquery-->
<script>
    (function($) {
        $('.accordion > li:eq(0) a').addClass('active').next().slideDown();

        $('.accordion a').click(function(j) {
            var dropDown = $(this).closest('li').find('p');

            $(this).closest('.accordion').find('p').not(dropDown).slideUp();

            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.accordion').find('a.active').removeClass('active');
                $(this).addClass('active');
            }

            dropDown.stop(false, true).slideToggle();

            j.preventDefault();
        });
    })(jQuery);
</script>
