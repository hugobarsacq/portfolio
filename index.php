<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== SWIPER CSS ===== -->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!-- ===== BOX ICONS ===== -->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Hugo Barsacq</title>
        <link rel="icon" href="assets/img/favicon.ico" />
    </head>
    <body>
        <!--===== SCROLL TOP =====-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-chevron-up scrolltop__icon' ></i>
        </a>
        
        <!--===== HEADER =====-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#" class="nav__logo">Hugo Barsacq</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Accueil</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">À propos</a></li>
                        <li class="nav__item"><a href="#services" class="nav__link">Services</a></li>
                        <li class="nav__item"><a href="#portfolio" class="nav__link">Sites Web</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Me contacter</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__data">
                        <span class="home__greeting">Bonjour, mon nom est</span>
                        <h1 class="home__name">Hugo</h1>
                        <span class="home__profession">Développeur Web</span>
                        <a download="" href="assets/pdf/Hugo-Barsacq-Cv.pdf" class="button button-light home__button">Télécharger mon CV</a>
                    </div>

                    <div class="home__social">
                        <a href="https://github.com/hugobarsacq/" class="home__social-icon"><i class='bx bxl-github'></i></a>
                        <a href="https://www.linkedin.com/in/hugobarsacq/" class="home__social-icon"><i class='bx bxl-linkedin-square' ></i></a>
                    </div>

                    <div class="home__img">
                        <img src="assets/img/accueil.jpg" alt="">
                    </div>
                </div>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section bd-container" id="about">
                <span class="section-subtitle">Mon histoire</span>
                <h2 class="section-title">À propos</h2>

                <div class="about__container bd-grid">
                    <div class="about__data bd-grid">
                        <p class="about__description"><span>Bonjour, je suis <br></span> Étudiant / Développeur front-end et back-end et je suis passionné par la création et le développement d'interfaces web, avec des années d'expérience dans la conception et le développement de sites Web.</p>

                        <div>
                            <span class="about__number">03</span>
                            <span class="about__achievement">Années d'éxperiences</span>
                        </div>
                        <div>
                            <span class="about__number">07</span>
                            <span class="about__achievement">Projets complétés</span>
                        </div> 
                    </div>

                    <img src="assets/img/a_propos.jpg" alt="" class="about__img">
                </div>
            </section>

            <!--===== QUALIFICATION =====-->
            <section class="qualification section bd-container">
                <span class="section-subtitle">Formation et Expériences</span>
                <h2 class="section-title">Qualifications</h2>

                <div class="qualification__container bd-grid">
                    <div class="qualification__content">
                        <h2 class="qualification__title">
                            <i class='bx bx-book-bookmark qualification__title-icon'></i>
                            Formation
                        </h2>

                        <div class="bd-grid">
                            <div class="qualification__data">
                                <h3 class="qualification__area">Mastère Expert en Développement Web</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class='bx bx-book-alt qualification__icon'></i>
                                        Ynov Bordeaux
                                    </span>

                                    <span class="qualification__work">
                                        <i class='bx bx-calendar-alt qualification__icon'></i>
                                        2021 - 2023
                                    </span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <h3 class="qualification__area">Bootcamp Ynov</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class='bx bx-book-alt qualification__icon'></i>
                                        Ynov Bordeaux
                                    </span>

                                    <span class="qualification__work">
                                        <i class='bx bx-book-alt qualification__icon'></i>
                                        Mars 2021 - Septembre 2021
                                    </span>
                                </div>
                            </div>
                            
                            <div class="qualification__data">
                                <h3 class="qualification__area">LP Métiers du Numérique</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class='bx bx-book-alt qualification__icon'></i>
                                        IUT de Bayonne et du Pays Basque
                                    </span>

                                    <span class="qualification__work">
                                        <i class='bx bx-calendar-alt qualification__icon'></i>
                                        2020 - 2021
                                    </span>
                                </div>
                            </div>
                            
                            <div class="qualification__data">
                                <h3 class="qualification__area">BTS SIO SLAM    </h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class='bx bx-book-alt qualification__icon'></i>
                                        Lycée Louis de Foix
                                    </span>

                                    <span class="qualification__work">
                                        <i class='bx bx-calendar-alt qualification__icon'></i>
                                        2018 - 2020
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="qualification__content">
                        <h2 class="qualification__title">
                            <i class='bx bx-briefcase-alt qualification__title-icon'></i>
                            Expériences pro.
                        </h2>

                        <div class="bd-grid">
                            <div class="qualification__data">
                                <h3 class="qualification__area">Développeur Web (Stage)</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class='bx bx-briefcase-alt qualification__icon'></i>
                                        IF Technologies
                                    </span>

                                    <span class="qualification__work">
                                        <i class='bx bx-calendar-alt qualification__icon'></i>
                                        Mai 2021 - Septembre 2021
                                    </span>
                                </div>
                            </div>

                            <div class="qualification__data">
                                <h3 class="qualification__area">Développeur Web (Stage)</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class='bx bx-briefcase-alt qualification__icon'></i>
                                        H&H Consulting
                                    </span>

                                    <span class="qualification__work">
                                        <i class='bx bx-calendar-alt qualification__icon'></i>
                                        Janvier 2020 - Février 2020
                                    </span>
                                </div>
                            </div>
                            
                            <div class="qualification__data">
                                <h3 class="qualification__area">Développeur Web (Stage)</h3>

                                <div class="qualification__box">
                                    <span class="qualification__work">
                                        <i class='bx bx-briefcase-alt qualification__icon'></i>
                                        IUT de Bayonne et du Pays Basque
                                    </span>

                                    <span class="qualification__work">
                                        <i class='bx bx-calendar-alt qualification__icon'></i>
                                        Mai 2019 - Juin 2019
                                    </span>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </section>    

            <!--===== SERVICES =====-->
            <section class="services section bd-container" id="services">
                <span class="section-subtitle">Ce que je propose</span>
                <h2 class="section-title">Services</h2>

                <div class="services__container bd-grid">
                    <div class="services__data">
                        <i class='bx bx-palette services__icon' ></i>
                        <h3 class="services__title">Ui/Ux Design</h3>
                        <p class="services__description">Service that I offer and work, with years of experience in the work area.</p>
                        <a href="#portfolio" class="button">En savoir plus</a>
                    </div>

                    <div class="services__data">
                        <i class='bx bx-laptop services__icon' ></i>
                        <h3 class="services__title">Développement Web</h3>
                        <p class="services__description">Service that I offer and work, with years of experience in the work area.</p>
                        <a href="#portfolio" class="button">En savoir plus</a>
                    </div>

                    <div class="services__data">
                        <i class='bx bx-pen services__icon' ></i>
                        <h3 class="services__title">Design Graphique</h3>
                        <p class="services__description">Service that I offer and work, with years of experience in the work area.</p>
                        <a href="#portfolio" class="button">En savoir plus</a>
                    </div>
                </div>
            </section>     
            
            <!--===== PROJECT IN MIND =====-->
            <section class="project section bd-container">
                <div class="project__container bd-grid">
                    <div class="project__data">
                        <i class='bx bx-chat project__icon' ></i>
                        
                        <div>
                            <h2 class="project__title">Projet en tête</h2>
                            <p class="project__description">Contactez-moi pour réaliser votre projet souhaité.</p>  
                        </div>

                        <div>
                            <a href="#contact" class="button button-white">Me contacter</a>
                        </div>
                    </div>
                </div>
            </section>    

            <!--===== PORTFOLIO =====-->
            <section class="portfolio section bd-container" id="portfolio">
                <span class="section-subtitle">Mes récents travaux</span>
                <h2 class="section-title">Sites Web</h2>

                <div class="portfolio__nav">
                    <span class="portfolio__item active-portfolio" data-filter="all">Tout</span>
                    <span class="portfolio__item" data-filter=".web">Web</span>
                    <span class="portfolio__item" data-filter=".ux">Ui/Ux</span>
                    <span class="portfolio__item" data-filter=".app">App</span>
                </div>

                <div class="portfolio__container bd-grid">
                    <div class="portfolio__content mix web">
                        <a href="#"><img src="assets/img/work1.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Web development</span>
                            <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                            <a href="#" class="button button-link">Plus de détails</a>
                        </div>
                    </div>

                    <div class="portfolio__content mix web">
                        <a href="#"><img src="assets/img/work2.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Web development</span>
                            <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                            <a href="#" class="button button-link">Plus de détails</a>
                        </div>
                    </div>

                    <div class="portfolio__content mix ux">
                        <a href="#"><img src="assets/img/work3.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Ux design</span>
                            <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                            <a href="#" class="button button-link">Plus de détails</a>
                        </div>
                    </div>

                    <div class="portfolio__content mix ux">
                        <a href="#"><img src="assets/img/work4.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Ux design</span>
                            <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                            <a href="#" class="button button-link">Plus de détails</a>
                        </div>
                    </div>

                    <div class="portfolio__content mix app">
                        <a href="#"><img src="assets/img/work5.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Mobile app</span>
                            <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                            <a href="#" class="button button-link">Plus de détails</a>
                        </div>
                    </div>

                    <div class="portfolio__content mix app">
                        <a href="#"><img src="assets/img/work6.jpg" alt="" class="portfolio__img"></a>
                        <div class="portfolio__data">
                            <span class="portfolio__subtitle">Mobile app</span>
                            <a href="#"><h2 class="portfolio__title">New portfolio of work done for a client.</h2></a>
                            <a href="#" class="button button-link">Plus de détails</a>
                        </div>
                    </div>
                </div>
            </section>    

            <!--===== TESTIMONIAL =====-->
            <!-- <section class="testimonial section bd-container">
                <span class="section-subtitle">My client saying</span>
                <h2 class="section-title">Testimonial</h2>

                <div class="testimonial__container swiper-container">
                    <div class="swiper-wrapper">
                        <div class="testimonial__content swiper-slide">
                            <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__img">
                            <h3 class="testimonial__title">Nick Holly</h3>
                            <span class="testimonial__client">Client</span>
                            <p class="testimonial__description">This company does a very good service, offers the best deals and does a good job, I recommend it.</p>
                        </div>

                        <div class="testimonial__content swiper-slide">
                            <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__img">
                            <h3 class="testimonial__title">Sara Mill</h3>
                            <span class="testimonial__client">Client</span>
                            <p class="testimonial__description">This company does a very good service, offers the best deals and does a good job, I recommend it.</p>
                        </div>

                        <div class="testimonial__content swiper-slide">
                            <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">
                            <h3 class="testimonial__title">Clay Mitchell</h3>
                            <span class="testimonial__client">Client</span>
                            <p class="testimonial__description">This company does a very good service, offers the best deals and does a good job, I recommend it.</p>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </section> -->   

            <!--===== CONTACTME =====-->
            <section class="contact section bd-container" id="contact">
                <span class="section-subtitle">Pour des projets</span>
                <h2 class="section-title">Me contacter</h2>

                <div class="contact__container bd-grid">
                    <div class="contact__content bd-grid">
                        <div class="contact__box">
                            <i class='bx bx-home contact__icon'></i>
                            <h3 class="contact__title">Lieu</h3>
                            <span class="contact__description">Bordeaux</span>
                        </div>

                        <div class="contact__box">
                            <i class='bx bx-phone contact__icon'></i>
                            <h3 class="contact__title">Téléphone</h3>
                            <span class="contact__description">0648922515</span>
                        </div>

                        <div class="contact__box">
                            <i class='bx bx-envelope contact__icon'></i>
                            <h3 class="contact__title">E-Mail</h3>
                            <span class="contact__description">hugo.barsacq@ynov.com</span>
                        </div>

                        <div class="contact__box">
                            <i class='bx bx-chat contact__icon'></i>
                            <h3 class="contact__title">Chat</h3>
                            <div>
                                <a href="https://www.instagram.com/brscq/" class="contact__social"><i class='bx bxl-instagram'></i></a>
                                <a href="https://www.messenger.com/t/hugobarsacq" class="contact__social"><i class='bx bxl-messenger'></i></a>
                            </div>
                        </div>
                    </div>

                    <?php
                    if(isset($_POST['mailform']))
                    {
	                    if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	                    {
		                    $header="MIME-Version: 1.0\r\n";
		                    $header.='From:"VOTRE NOM"<email-expediteur@example.org>'."\n";
		                    $header.='Content-Type:text/html; charset="uft-8"'."\n";
		                    $header.='Content-Transfer-Encoding: 8bit'; 

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
				</div>
			</body>
		</html>
		';

		mail("email-destinataire@example.org", "CONTACT - Monsite.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>
                    <form action="" class="contact__form">
                        <div class="contact__inputs">
                            <input type="text" placeHolder="Nom" class="contact__input"> 
                            <input type="email" required="required" placeHolder="E-Mail" class="contact__input"> 
                        </div>

                        <div class="contact__inputs">
                            <input type="text" placeHolder="Sujet" class="contact__input"> 
                            <input type="number" placeHolder="Téléphone" class="contact__input"> 
                        </div>

                        <textarea required="required" name="" id="" cols="0" rows="7"  placeholder="Message" class="contact__input"></textarea>

                        <input type="submit" value="Envoyer" class="button contact__button">
                    </form>
                </div>
            </section>  
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <div class="footer__container bd-container">
                <h1 class="footer__title">Hugo Barsacq</h1>
                <p class="footer__description">Je suis Hugo Barsacq et ceci est mon site web personnel, consultez-moi ici</p>

                <div class="footer__social">
                    <a href="https://github.com/hugobarsacq/" class="footer__link"><i class='bx bxl-github' ></i></a>
                    <a href="https://www.linkedin.com/in/hugobarsacq/" class="footer__link"><i class='bx bxl-linkedin' ></i></a>
                </div>
                <p class="footer__copy">&#169; 2021 Hugo Barsacq. Tous droits réservés</p>
            </div>
        </footer>
        
        <!-- ===== MIXITUP FILTER ===== -->
        <script src="assets/js/mixitup.min.js"></script>
        
        <!-- ===== SWIPER JS ===== -->
        <script src="assets/js/swiper-bundle.min.js"></script>
        
        <!-- ===== GSAP ===== -->
        <script src="assets/js/gsap.min.js"></script>
        
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>