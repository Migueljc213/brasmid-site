<?php
require_once('./navbar.php');

?>

<!-- Sidebar Cart Item -->
<div class="xs-sidebar-group info-group">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget">
                    <i class="far fa-times-circle"></i>
                </a>
            </div>
            <div class="sidebar-textwidget">
                <!-- Sidebar Info Content -->
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="nav-logo">
                            <a href="index.html"><img src="assets/images/logo.png" alt="" /></a>
                        </div>
                        <div class="content-box">
                            <h2>About Us</h2>
                            <p class="text">The argument in favor of using filler text goes something like this: If you use real content in the Consulting Process, anytime you reach a review point you’ll end up reviewing and negotiating the content itself and not the design.</p>
                            <a href="index" class="theme-btn btn-style-two"><span>Consultation</span> <i class="fas fa-heart"></i></a>
                        </div>
                        <div class="contact-info">
                            <h2>Contact Info</h2>
                            <ul class="list-style-one">
                                <li><span class="icon flaticon-email-1"></span>Chicago 12, Melborne City, USA</li>
                                <li><span class="flaticon-24-hours-1"></span>(+001) 123-456-7890</li>
                                <li><span class="icon flaticon-placeholder-1"></span>globex@gmail.com</li>
                                <li><span class="flaticon-24-hours-3"></span>Week Days: 09.00 to 18.00 Sunday: Closed</li>
                            </ul>
                        </div>
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                            <li class="twitter"><a href="#" class="fab fa-instagram"></a></li>
                            <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                            <li class="instagram"><a href="#" class="fab fa-pinterest-p"></a></li>
                            <li class="youtube"><a href="#" class="fab fa-linkedin-in"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- start techno slider Area -->
<!--==================================================-->
<div class="breatcumb-area">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-lg-12">
                <div class="breatcumb-content text-center">
                    <div class="breatcumb-title">
                        <h2>Contate-nos</h2>
                    </div>
                    <div class="breatcumb-content-text">
                        <ul>
                            <li><a href="#">home</a> <i class="fas fa-angle-double-right"></i> <span>Contate-nos</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End techno slider Area -->
<!--==================================================-->

<!--==================================================-->
<!-- Start techno Contate-nos Area -->
<!--==================================================-->
<div class="contact-us-area style-two pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dreamit-section-title style-two text-center">
                    <h5>Contate-nos</h5>
                    <h1>ENTRE EM CONTATO A QUALQUER MOMENTO</h1>
                    <h1>COM <span>BRASMID</span></h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-us-single-box">
                            <div class="contact-us-icon">
                                <i class="flaticon-suitcase"></i>
                            </div>
                            <div class="contact-us-title">
                                <h2>ENDEREÇO ​​DO ESCRITÓRIO</h2>
                                <p>Avenida General Miguel Costa 246b Vila Mury - RJ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-us-single-box">
                            <div class="contact-us-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="contact-us-title">
                                <h2>NÚMERO DE TELEFONE</h2>
                                <p>+55 (24) 99941-7827</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="contact-us-single-box">
                            <div class="contact-us-icon">
                                <i class="flaticon-communications"></i>
                            </div>
                            <div class="contact-us-title">
                                <h2>ENDEREÇO ​​DE E-MAIL</h2>
                                <p>contato@brasmid.com.br</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact-form-box style-two">
                            <form action="./enviar-email.php" method="POST" id="dreamit-form">
                                <h4>Para quaisquer dúvidas relacionadas aos meus Programas de Varejo e Liderança</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-title">
                                            <p>Nome*</p>
                                        </div>
                                        <div class="from-box">
                                            <input type="text" name="nome" placeholder="Seu Nome*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-title">
                                            <p>Email*</p>
                                        </div>
                                        <div class="from-box">
                                            <input type="text" name="email" placeholder="Seu Email*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-title">
                                            <p>Celular*</p>
                                        </div>
                                        <div class="from-box">
                                            <input type="text" name="telefone" placeholder="Seu Celular*" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-title">
                                            <p>Serviço</p>
                                        </div>
                                        <div class="from-box">
                                            <select name="Select-Service" id="Select-Service" required>
                                                <option value="#solucoes">Selecitone o Serviço</option>
                                                <option value="Desenvolvimento de Softwares">Desenvolvimento de Softwares</option>
                                                <option value="Desenvolvimento de Sites e Landing Pages">Desenvolvimento de Sites e Landing Pages</option>
                                                <option value="Hospedagem de Software, Site e E-mail">Hospedagem de Software, Site e E-mail</option>
                                                <option value="">Tráfego Pago</option>
                                                <option value="#">Mídia Social</option>
                                        
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-title">
                                            <p>Sua Mensagem</p>
                                        </div>
                                        <div class="from-box">
                                            <textarea name="mensagem" id="mensagem" placeholder="Mensagem*"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="from-box1 pt-35">
                                    <button type="submit">Enviar<span><i class="fas fa-check-square"></i></span></button>
                                </div>
                            </form>
                            <div id="status"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==================================================-->
<!-- End techno Contate-nos Area -->
<!--==================================================-->

<?php
require_once('./footer.php')
?>


</body>
</html>