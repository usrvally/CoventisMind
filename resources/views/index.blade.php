@extends('layouts.master')


@section('content')
  <!-- Slider area -->
    <section class="slider_area row m0">
        <div class="slider_inner">
            <div data-thumb="{{URL::asset('storage/theme/images/slid2.jpg')}}" data-src="{{URL::asset('storage/theme/images/slid2.jpg')}}">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Bienvenue chez COVENTUSMIND</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Performance, Dernière technologie, App sur mesure</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Notre équipe de professionnels est a votre disposition pour le developement de vos application Web, mobile et logiciels de bureau.</p>
                        <a class=" wow fadeInUp animated btn_contact" data-wow-delay="1s" href="#apropos">Lire plus</a>
                   </div>
                </div>
            </div>
            <div data-thumb="{{URL::asset('storage/theme/images/slid4.jpg')}}" data-src="{{URL::asset('storage/theme/images/slid4.jpg')}}">
                <div class="camera_caption">
                   <div class="container">
                        <h5 class=" wow fadeInUp animated">Bienvenue chez COVENTUSMIND</h5>
                        <h3 class=" wow fadeInUp animated" data-wow-delay="0.5s">Performance, Dernière technologie, App sur mesure</h3>
                        <p class=" wow fadeInUp animated" data-wow-delay="0.8s">Notre équipe de professionnels est a votre disposition pour le developement de vos application Web, mobile et logiciels de bureau.</p>
                        <a class=" wow fadeInUp animated btn_contact" data-wow-delay="1s" href="#apropos">Lire plus</a>
                   </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Slider area -->

    <!-- About Us Area -->
    <section class="about_us_area row" id="apropos">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>A PROPOS DE NOUS</h2>
            </div>
            <div class="row about_row">
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2>QUI SOMMES-NOUS ?</h2>
                    </div>
                    <p align="Justify">COVENTUSMIND est une agence internationale specialisée dans le monde de développement web, mobile et les logiciels sur mesure.
                    Nous sommes a la disposition de nos client pour les satisfaires en leurs offrant des produits performant, qualités avec les meilleurs prix.</p>
                    <a href="#contact" class="button_all btn_contact">Contactez-nous</a>
                </div>
                <div class="col-md-5 col-sm-6 about_client">
                    <img src="{{URL::asset('storage/theme/images/COVENTUSMIND/A_propos.jpg')}}" alt="a propos" >
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->

     <!-- NOS SERVICES -->
    <section class="professional_builder row" id="Nos_Services">
        <div class="container">
            <div class="tittle wow fadeInUp Ntop">
               <h2>NOS SERVICES</h2>
            </div>
            <div class="row builder_all">
                <div class="col-md-4 col-sm-6 builder">
                    <img src="{{URL::asset('storage/theme/images/gallery/app_sur_mesure.jpg')}}">
                    <h3>Application Sur-Mesure</h3>
                    <p>Le mode d'emploi se diffère d'entreprise a une autre, c'est lá l'utilité d'une application sur-mesure, elle vous permet
                     de bien gérer les taches visée dans votre entreprise, pour un gain de temps et de prodectivité au sein de l'entreprise.
                    Nous sommes a votre dispotion pour vos donner le meuilleur de nous.</p>
                </div>
                <div class="col-md-4 col-sm-6 builder">
                    <img src="{{URL::asset('storage/theme/images/gallery/app_mobile.jpg')}}">
                    <h3>Application Mobile</h3>
                    <p>Une application mobile c'est moyens pour atteindre ses clients partout et à tout instant.
                    C'est dans cette optique là que COVENTUSMIND propose un ensemble de solutions pour les terminaux mobiles s'adaptant à vos besoins.</p>
                    
                </div>
                <div class="col-md-4 col-sm-6 builder">
                    <img src="{{URL::asset('storage/theme/images/gallery/web_site.jpg')}}">
                    <h3>Web Site</h3>
                    <p>Pour se faire connaitre, la meuilleure maniere est d'avoir un site web bien référencé, pour présenter et promouvoir votre activité.
                    Nous proposons a nos clients le meilleur du web.</p>
                </div>
           </div>
        </div>
    </section>
    <!-- End NOS SERVICES -->

     <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Contactez-nous</h2>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233533.81021805512!2d90.44069804466251!3d23.85534870087626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1482565625375"></iframe>
    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info" id="contact">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-2 contact_info">
                </div>
                <div class="col-sm-8 contact_info send_message">
                    <h2 align="center">CONTACTEZ-NOUS</h2>
                    <form class="contact_box" method="POST" action="{{ route('postMail') }}">
                     {{ csrf_field() }}
                        <input type="text" class="form-control input_box" placeholder="Nom *" id="nom" name="nom" required>
                        <input type="text" class="form-control input_box" placeholder="Prenom *" name="prenom"required>
                        <input type="text" class="form-control input_box" placeholder="Votre Email *" name="email" required>
                        <input type="text" class="form-control input_box" placeholder="Sujet *" name="sujet" required>
                        <textarea class="form-control input_box" placeholder="Message *" name="message" required></textarea>
                        <button type="submit" class="btn btn-default" align="right">Envoyer</button>
                    </form>
                    <div> @if (session('messageenvoyer')) 
                        <div align="left"> 
                            <h5>
                                {{ session('messageenvoyer') }}
                            </h5> 
                        </div>
                         @endif</div>
                    </div>
                <div class="col-sm-2 contact_info">
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->

@stop