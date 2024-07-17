@extends('templates.master')

@section('title')
    my website
@endsection

@section('stylecss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection

@section('jspreloader')
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
@endsection



@extends('templates.header')

@section('main-banner')
    <div class="main-banner" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-banner">
                        <div class="item item-1">
                            <div class="header-text">
                                <span class="category">Our Courses</span>
                                <h2>With Scholar Teachers, Everything Is Easier</h2>
                                <p>Scholar is free CSS template designed by TemplateMo for online educational related
                                    websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's Scholar?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-2">
                            <div class="header-text">
                                <span class="category">Best Result</span>
                                <h2>Get the best result out of your effort</h2>
                                <p>You are allowed to use this template for any educational or commercial purpose. You are
                                    not allowed to re-distribute the template ZIP file on any other website.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's the best result?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item item-3">
                            <div class="header-text">
                                <span class="category">Online Learning</span>
                                <h2>Online Learning helps you save the time</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporious
                                    incididunt ut labore et dolore magna aliqua suspendisse.</p>
                                <div class="buttons">
                                    <div class="main-button">
                                        <a href="#">Request Demo</a>
                                    </div>
                                    <div class="icon-button">
                                        <a href="#"><i class="fa fa-play"></i> What's Online Course?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('testimonials')
    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>mentoris consult</h6>
                        <h2>NOTRE IDENTITÉ</h2>
                        <p><strong>Mentoris Consult</strong>
                            est un bureau d'études et de conseil très attachés au sens du service, nous
                            sommes sur le terrain, proches de nos clients et toujours à leurs dispositions, en faisant
                            preuve d'une très grande réactivité par rapport aux problèmes qui nous sont posés.
                            <br>

                            <code> Notre principale</code>
                            est préoccupation d'entretenir une relation personnalisée avec nos clients qui
                            sont, pour la plupart, dirigeants et chefs d'entreprise.
                            <br>
                            <code>Notre savoir-agir</code>
                            se fonde sur nos méthodes de travail, où l'expertise et la précision sont de
                            rigueur. Nous nous adaptons donc en permanence aux besoins spécifiques de nos clients et
                            veillons à établir une relation de confiance sur le long terme, secret de la réussite de toute
                            mission de conseil.
                        </p>
                        <div class="special-offer">
                            <span class="offer"></span>
                            <h6><code><em>Mentoris Consult</em></code></h6>
                            <h4>Read More<em>About-us</em> !</h4>
                            <a href="#about-us"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <img src="assets/images/identite.png" alt="online degrees">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('services')
    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-01.png" alt="online degrees">
                        </div>
                        <div class="main-content">
                            <h4>Service Formation</h4>
                            <p>
                                <strong>Contribuer</strong> à l'amélioration des compétences
                                techniques et managériales des ressources humaines;
                            </p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-02.png" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4> Service Etude Et conseil </h4>
                            <p>
                                <strong>Réaliser</strong> des études d'ordre générales selon
                                les besoins exprimés par
                                les clients.
                            </p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-03.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Service Accompanement Technique</h4>
                            <p>
                                <strong>Assurer</strong> la conformité aux différents normes nationals ou internationales en
                                garantissant un accompagnement distingué distingué jusqu'à l'obtention de la certification
                                par les organismes tierces; <br>
                                <strong>Accompagner</strong> les organismes dans la conformité aux exigences légales et
                                réglementaires,
                            </p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="assets/images/service-03.png" alt="web experts">
                        </div>
                        <div class="main-content">
                            <h4>Service Ingenierie</h4>
                            <p>

                                <strong>Assurer</strong> l'accompagnement technique pour le compte des divers organismes, au
                                démarrage et/ou en fonctionnement des projets;
                                <strong>Efficacité</strong> plus l'optimisation énergétique Proposer des solutions optimales
                                à des problématiques posées par diveres organisations privées ou publiques;
                            </p>
                            <div class="main-button scroll-to-section">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('about-us')
    <div class="section about-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Notre Mission ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Notre mission </strong> est claire.
                                    Nous cherchons à identifier les opportunités et à faire évoluer les
                                    activités de nos clients. <br>
                                    <code>Nous réunissons</code>
                                    les meilleures équipes pour qu'elles bousculent les idées établies et permettent aux
                                    organisations de se transformer.
                                    <code>Nous travaillons</code> en partenariat avec nos clients pour leur permettre
                                    d'établir un avantage concurrentiel durable.Nous construisons l'avenir. Ensemble.




                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Nos valeurs ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Depuis sa fondation, <strong>Mentoris</strong> Consult s'est développé à une vitesse
                                    extraordinaire.
                                    Grâce notamment à la force de ses valeurs, notre bureau a su le faire sans éroder ses
                                    caractéristiques qui donnent uniques,
                                    envie de travailler avec et au sein de <code>MENTORIS CONSULT</code>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Nos Équipes ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Une structure unique pour des missions complètes : Les services exécutifs constituent
                                    l'instance de pilotage de <strong>Mentoris Consult</strong>. <br>
                                    Il rassemble, autour du directeur général, des responsables opérationnels et
                                    expérimentés afin de vous aider à atteindre vos <code>objectifs</code>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Notre Objectifes ?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    ⚫ <strong>Accompagner</strong> les diveres entreprises halio ou agroalimentaires pour la
                                    mise en
                                    conformité selon les exigences légales de l'autorité compétente <code>(ONSSA,
                                        EACCE.)</code>; <br>
                                    ⚫ <strong>Assurer</strong> l'accompagnement technique, au démarrage ou en
                                    fonctionnement, des projets
                                    agricoles ou industriels; <br>

                                    ⚫ <strong>Assurer</strong> la conformité aux différents standards internationaux en
                                    assurant un
                                    accompagnement personnalisé personnalisé jusqu'à l'obtention de la reconnaissance par
                                    les parties tierces; <br>

                                    ⚫ <strong>Garantir</strong> la compétitivité de ses clients; <br>
                                    ⚫ <strong>Hisser</strong> à son maximum le niveau de compétence technique et managériale
                                    des ressources
                                    humaines de ses partenaires; <br>
                                    ⚫ <strong>Permettre</strong> l'optimisation des processus industriels sur les plans
                                    énergétiques et
                                    organisationnels; <br>
                                    ⚫ <strong>Réaliser</strong> des études générales en fonction des besoins exprimés par
                                    ses clients. <br>
                                    ⚫ <strong>Trouver</strong> des solutions optimales à des problématiques posées par
                                    diveres organisations
                                    privées ou publiques;<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>BUREAU D’ÉTUDE, CONSEIL & FORMATION
                            ACCOMPAGNEMENT À LA CERTIFICATION AUDITS INGÉNIERIES</h2>
                        <div class="main-button">
                            <a href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('courses')
@endsection

@section('fun-facts')
    <div class="section fun-facts" id="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="50" data-speed="5000"></h2>
                                    <p class="count-text ">Happy Clients</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="364" data-speed="5000"></h2>
                                    <p class="count-text ">Taches complets</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="20" data-speed="5000"></h2>
                                    <p class="count-text ">Employees</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="5" data-speed="5000"></h2>
                                    <p class="count-text ">Years Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('team')
@endsection


@section('events')
@endsection

@section('contact-us')
    <div class="contact-us section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>N'hésitez pas à nous contacter à tout moment</h2>
                        <div class="contact-info">
                            <ul>
                                <li><a href="linkedin.com/profile" style="color: #7a6ad8;"><i class="fab fa-linkedin"></i> M. Youness EL BETTACHE</a></li>
                                <li><a href="facebook.com/profile" style="color: #7a6ad8;"><i class="fab fa-facebook"></i> Mentoris Consult</a></li>
                                <li style="color: #7a6ad8;"><i class="fa fa-phone" ></i> 06 66 53 00 54</li>
                                <li style="color: #7a6ad8;"><i class="fa fa-envelope"></i> mentoris.consult@gmail.com</li>
                                <li style="color: #7a6ad8;"><i class="fa fa-map-marker"></i> Nº | Hay al Hana Bloc B imm Alyamam, Agadir</li>
                         

                            </ul>
                        </div>
                        <div class="special-offer">
                            <span class="offer">off<br><em>50%</em></span>
                            <h6>Valide: <em>24 April 2036</em></h6>
                            <h4>Special Offer <em>50%</em> OFF!</h4>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="{{ route('sendcontact') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name" placeholder="Your Name..."
                                            autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your E-mail..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="subject" id="subject"
                                            placeholder="the subject is..." autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="orange-button">Send Message
                                            Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <footer>
        <div class="container">
            <div class="col-lg-12">
                <p>Copyright © 2024 Mohamed Errouhe. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a href="#"
                        rel="nofollow" target="_blank">MOHAMEDERROUHE</a></p>
            </div>
        </div>
    </footer>
@endsection

@section('script')
@endsection
