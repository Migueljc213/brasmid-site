<?php
require_once('./navbar.php');

if ($_GET) {
    $url = explode('/', $_GET['url']);
    if ('./' . $url[0] . '.php') {
        require_once './' . $url[0] . '.php';
    }else{
        require_once './index.php';
    }
}
?>
<!--==================================================-->
<!-- Start slider Area -->
<!--==================================================-->
<div class="slider-area slider7 d-flex align-items-center">
    <div class="container">
        <div class="row d-flex align-items-center slider">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="slider-content text-left pt-110">
                    <h4>BEM-VINDO À BRASMID TECNOLOGIA</h4>
                    <h1>Seu Sucesso Digital</h1>
                    <p>Precisando de um site personalizado, software sob medida ou uma campanha de marketing
                        digital?</p>
                    <div class="slider-button">
                        <a href="#">Fale conosco <i class="flaticon-right-arrow"></i></a>
                    </div>
                    <div class="rs-video style-four">
                        <div class="animate-border">
                            <a class="video-vemo-icon3 venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="https://youtu.be/Hfrc1ljAt48">
                                <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="slider-shape">
                    <div class="slider-shape-inner4 bounce-animate3">
                        <img src="assets/images/slider/shape.png" alt="">
                    </div>
                    <div class="slider-shape-inner5 bounce-animate">
                        <img src="assets/images/slider/shape9.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="dreamit-slider-thumb-2">
                    <img src="assets/images/slider/img-1.png" alt="">
                </div>
                <div class="circles-thumb">
                    <div class="circle-shape-thumb">
                        <img src="assets/images/slider/round1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="slider-shape">
                <div class="slider-shape-inner1 bounce-animate2">
                    <img src="assets/images/slider/shape1.png" alt="">
                </div>
                <div class="slider-shape-inner2 bounce-animate4">
                    <img src="assets/images/slider/shape2.png" alt="">
                </div>
                <div class="slider-shape-inner3 bounce-animate">
                    <img src="assets/images/slider/shape5.png" alt="">
                </div>
                <div class="slider-shape-inner6 bounce-animate">
                    <img src="assets/images/slider/round2.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!--End techno slider Area  -->
<!--==================================================-->

<!--==================================================-->
<!-- Start techno feature Area -->
<!--==================================================-->
<div class="feature-area style-three pt-100 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="techno-section-title text-center">
                    <h5>Nossa Agência</h5>
                    <h1>Inovação</h1>
                    <p class="feature-text">A Brasmid impulsiona o lançamento do seu produto na internet, gerando
                        resultados expressivos. Descubra nossos serviços.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="feature-single-box">
                    <div class="feature-icon">
                        <i class="flaticon-snow-globe"></i>
                    </div>
                    <div class="feature-title">
                        <h3>Site e Landinpage</h3>
                        <p>Utilizamos o WordPress com Elementor para soluções rápidas e flexíveis, além de
                            desenvolvermos sites com código puro para projetos mais específicos e personalizados.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="feature-single-box">
                    <div class="feature-icon2">
                        <i class="flaticon-money-4"></i>
                    </div>
                    <div class="feature-title-2">
                        <h3>Planejamento</h3>
                        <p>Criamos estratégias personalizadas de marketing digital que incluem análise de mercado,
                            público-alvo, criação de conteúdo, gestão de campanhas e análise de resultados.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="feature-single-box">
                    <div class="feature-icon3">
                        <i class="flaticon-light-bulb"></i>
                    </div>
                    <div class="feature-title-3">
                        <h3>Automação</h3>
                        <p>Utilizamos ferramentas como ManyChat, N8N, Typebot, RD Station, DevZapp, ChatWoot e
                            Twilio para automatizar e otimizar suas campanhas de marketing digital.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="feature-shape-thumb">
        <div class="feature-shape-img bounce-animate4">
            <img src="assets/images/resource/feature-shape.png" alt="">
        </div>
    </div>
    <div class="feature-shape-thumb2">
        <div class="feature-shape-img bounce-animate4">
            <img src="assets/images/resource/feature-shape-2.png" alt="">
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End techno feature Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start techno about Area -->
<!--==================================================-->
<div class="about-area style-five">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="techno-about-thumb-box">
                    <div class="techno-about-thumb-3">
                        <img src="assets/images/about/about2.png" alt="">
                    </div>
                </div>
                <div class="about-shape-thumb">
                    <div class="about-shape-img bounce-animate4">
                        <img src="assets/images/resource/blog-shape1.png" alt="">
                    </div>
                </div>
                <div class="about-shape-thumb">
                    <div class="about-shape-img2 bounce-animate4">
                        <img src="assets/images/about/shape2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="row about-left">
                    <div class="col-lg-12">
                        <div class="techno-section-title text-left style-two">
                            <h5>BRASMID</h5>
                            <h1>Umas das melhores do Rio de Janeiro</h1>
                            <p class="about-text">Transformamos sua visão digital em realidade. Utilizamos
                                tecnologias avançadas para desenvolver soluções personalizadas de software, sites e
                                marketing digital, garantindo resultados excepcionais para o seu negócio. Nossa
                                equipe dedica-se a fornecer suporte de alta qualidade, plataformas inovadoras e
                                estratégias eficazes para impulsionar o sucesso da sua empresa.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-single-icon-box1">
                            <div class="about-icon1">
                                <i class="flaticon-light-bulb"></i>
                            </div>
                            <div class="about-title1">
                                <h4>Inovação</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-single-icon-box2">
                            <div class="about-icon2">
                                <i class="flaticon-support-3"></i>
                            </div>
                            <div class="about-title2">
                                <h4>Atendimento</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-single-icon-box3">
                            <div class="about-icon3">
                                <i class="flaticon-hand-shake"></i>
                            </div>
                            <div class="about-title3">
                                <h4>Relacionamento</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-single-icon-box4">
                            <div class="about-icon4">
                                <i class="flaticon-time-3"></i>
                            </div>
                            <div class="about-title4">
                                <h4>Planejamento</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-button2">
                            <a href="#">Fale Conosco <i class="flaticon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End techno about Area -->
<!--==================================================-->


<!--==================================================-->
<!-- Start techno counter Area -->
<!--==================================================-->
<div class="counter-area style-four">
    <div class="container">
        <div class="row counter-to">
            <div class="col-lg-5 col-sm-12">
                <div class="techno-section-title text-left counter-1 pb-2">
                    <h5>EMPRESA COM</h5>
                    <h1>15 Anos de Experiência</h1>
                    <p class="counter-text1">Desenvolvendo soluções de software personalizadas e estratégias de
                        marketing digital de forma inovadora. Capacitando negócios com tecnologia de ponta e suporte
                        dedicado, garantindo resultados excepcionais e satisfação do cliente.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="techno-single-counter-box">
                            <div class="single-counter-box-inner">
                                <div class="counter-icon">
                                    <i class="flaticon-temporary-agency"></i>
                                </div>
                                <div class="counter-text text-center">
                                    <h1 class="counter">300</h1>
                                    <span>+</span>
                                </div>
                                <div class="counter-title">
                                    <h4>Clientes Satisfeitos</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="techno-single-counter-box">
                            <div class="single-counter-box-inner">
                                <div class="counter-icon-1">
                                    <i class="flaticon-pen"></i>
                                </div>
                                <div class="counter-text-1">
                                    <h1 class="counter">320</h1>
                                    <span>+</span>
                                </div>
                                <div class="counter-title">
                                    <h4>Projetos Finalizados</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="techno-single-counter-box">
                            <div class="single-counter-box-inner">
                                <div class="counter-icon-2">
                                    <i class="fas fa-award"></i>
                                </div>
                                <div class="counter-text-2">
                                    <h1 class="counter">100</h1>
                                    <span>%</span>
                                </div>
                                <div class="counter-title">
                                    <h4>Satisfação Garantida</h4>
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
<!-- End techno counter Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start techno Portfolio Area -->
<!--==================================================-->
<div class="portfolio_area style-five">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="techno-section-title portfolio text-center pb-40">
                    <h5>Arquivos</h5>
                    <h1>Últimos Projetos</h1>
                    <p class="portfolio-text">Confira alguns dos nossos projetos mais recentes, onde aplicamos
                        nossas soluções personalizadas para ajudar nossos clientes a alcançar seus objetivos de
                        negócios com sucesso.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single_portfolio_box">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                            <img src="assets/images/resource/picmenu.webp" alt="Software PICMENU" />
                        </div>
                        <div class="single_portfolio_content">
                            <div class="single-portfolio-content-inner">
                                <h3><a href="https://www.picmenu.com.br/">PicMenu</a></h3>
                                <p>Sistema Web MicroSaaS<br> Cardápio Digital</p>
                                <div class="portfolio-icon">
                                    <a href="https://www.picmenu.com.br/"><i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single_portfolio_box">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                            <img src="assets/images/resource/farmausa-1.webp" alt="ERP Farmausa" />
                        </div>
                        <div class="single_portfolio_content-2">
                            <div class="single-portfolio-content-inner-2">
                                <h3><a href="https://www.farmausa.com/">FarmaUsa</a></h3>
                                <p>Sistema Web e E-Commerce <br> Software de Gestão Empresarial e Loja Virtual</p>
                                <div class="portfolio-icon-2">
                                    <a href="https://www.farmausa.com/"><i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single_portfolio_box">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                            <img src="assets/images/resource/siteaapvr.webp" alt="Site AAPVR" />
                        </div>
                        <div class="single_portfolio_content-3">
                            <div class="single-portfolio-content-inner-3">
                                <h3><a href="https://www.aapvr.com.br">Grupo AAPVR</a></h3>
                                <p>Site Institucional <br> Desenvolvimento de Site Personalizado </p>
                                <div class="portfolio-icon-3">
                                    <a href="https://www.aapvr.com.br"><i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single_portfolio_box">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                            <img src="assets/images/resource/igreja2.jpg" alt="Site Ferramar" />
                        </div>
                        <div class="single_portfolio_content-4">
                            <div class="single-portfolio-content-inner-4">
                                <h3><a href="https://www.ferramarrj.com.br/">Gestão de Igrejas - PGA</a></h3>
                                <p>Site Institucional <br> 6º Região da Igreja Metodista </p>
                                <div class="portfolio-icon-4">
                                    <a href="https://www.ferramarrj.com.br/"><i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single_portfolio_box">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                            <img src="assets/images/resource/riaam.jpg" alt="Site Ferramar" />
                        </div>
                        <div class="single_portfolio_content-4">
                            <div class="single-portfolio-content-inner-4">
                                <h3><a href="https://www.ferramarrj.com.br/">Riaam Brasil</a></h3>
                                <p>Site Institucional <br> Desenvolvimento de Site Personalizado </p>
                                <div class="portfolio-icon-4">
                                    <a href="https://www.ferramarrj.com.br/"><i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single_portfolio_box">
                    <div class="single_portfolio_inner">
                        <div class="single_portfolio_thumb">
                            <img src="assets/images/resource/siteferramar.webp" alt="Site Ferramar" />
                        </div>
                        <div class="single_portfolio_content-4">
                            <div class="single-portfolio-content-inner-4">
                                <h3><a href="https://www.ferramarrj.com.br/">Ferramar </a></h3>
                                <p>Site Institucional <br> Desenvolvimento de Site Personalizado </p>
                                <div class="portfolio-icon-4">
                                    <a href="https://www.ferramarrj.com.br/"><i class="fas fa-angle-double-right"></i></a>
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
require_once('./footer.php')
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



<script>
    $(document).ready(function() {
        $('#bar1').barfiller({
            duration: 7000
        });
        $('#bar2').barfiller({
            duration: 7000
        });
        $('#bar3').barfiller({
            duration: 7000
        });
    });
</script>
<!--faq jquery-->
</body>

</html>