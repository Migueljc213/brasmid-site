<?php
require_once('./navbar.php');

?>


<!--==================================================-->
<!-- start techno breatcome Area -->
<!--==================================================-->
<div class="breatcome-area style-two upper">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12">
                <div class="breatcumb-content text-center">
                    <div class="breatcumb-content-text1">
                        <ul>
                            <li><a href="./index.php"><span>início</span> Sistemas Prontos</a></li>
                        </ul>
                    </div>
                    <div class="breatcumb-title1">
                        <h2> Sistemas Prontos</h2>
                        <p>Veja como nossas soluções inovadoras em design e desenvolvimento web transformaram ideias em websites impactantes e funcionais. Cada projeto é uma prova do nosso compromisso com a excelência e a satisfação do cliente.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End techno breatcome Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start techno Portfolio Area -->
<!--==================================================-->
<div class="portfolio_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="dreamit-section-title text-center style-two">
                    <h5> Sistemas Prontos</h5>
                    <h1> <span>  Sistemas </span> Prontos</h1>
                </div>
            </div>
            <div class="col-lg-12 col-sm-12">
                <div class="portfolio_nav text-center">
                    <div class="portfolio_menu">
                        <ul class="menu-filtering">
                            <li class="current_menu_item" data-filter="*">TODOS</li>
                            <li data-filter=".physics">Sites</li>
                            <li data-filter=".cemes">Landing Page</li>
                            <li data-filter=".math">Softwares</li>
                            <li data-filter=".biology">Ensino</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row image_load">
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item biology cemes">
                <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                        <img src="assets/images/resource/siteaapvr.webp" alt="Site AAPVR" />
                            <div class="single_portfolio_content">
                                <div class="single-portfolio-content-inner">
                                    <span>Ensino</span>
                                    <h3><a href="./projeto.php">Ensino - EAD</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item physics cemes">
                <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                        <img src="assets/images/resource/siteferramar.webp" alt="Site Ferramar" />
                            <div class="single_portfolio_content">
                                <div class="single-portfolio-content-inner">
                                    <span>Site</span>
                                    <h3><a href="./sistema-loja-virtual.php">Loja Virtual</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item math english">
                <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                        <img src="assets/images/resource/farmausa-1.webp" alt="ERP Farmausa" />
                            <div class="single_portfolio_content">
                                <div class="single-portfolio-content-inner">
                                    <span>Software</span>
                                    <h3><a href="portfolio-details.html">Gestão de Clínicas</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item engi math ">
                <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                        <img src="assets/images/resource/picmenu.webp" alt="Software PICMENU" />
                            <div class="single_portfolio_content">
                                <div class="single-portfolio-content-inner">
                                    <span>Software</span>
                                    <h3><a href="portfolio-details.html">Gestão de Projetos</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 grid-item engi math ">
                <div class="single_portfolio">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                        <img src="assets/images/resource/igreja2.jpg" alt="Igreja" />
                            <div class="single_portfolio_content">
                                <div class="single-portfolio-content-inner">
                                    <span>Software</span>
                                    <h3><a href="portfolio-details.html">Gestão de Igrejas</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--==================================================-->
<!--End techno Portfolio Area -->
<!--==================================================-->



<?php
require_once('./footer.php');

?>

<!--==================================================-->
<!-- Start scrollup section Area -->
<!--==================================================-->
<!-- scrollup section -->
<div class="scroll-area">
    <div class="top-wrap">
        <div class="go-top-btn-wraper">
            <div class="go-top go-top-button">
                <i class="fas fa-arrow-up"></i>
                <i class="fas fa-arrow-up"></i>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- Start scrollup section Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start Search Popup Area -->
<!--==================================================-->
<div class="search-popup">
    <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span></button>
    <button class="close-search"><i class="fas fa-arrow-up"></i></button>
    <form method="post" action="#">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required="">
            <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div>
<!--==================================================-->
<!-- Start Search Popup Area -->
<!--==================================================-->




</body>

</html>