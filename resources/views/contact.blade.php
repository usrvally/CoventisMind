@extends('layouts.master')


@section('content')
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Contactez-nous</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="#" class="active">Contactez-nous</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233533.81021805512!2d90.44069804466251!3d23.85534870087626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1482565625375"></iframe>
    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">location</a>
                            <a href="#">phone</a>
                            <a href="#">fax</a>
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">Sector # 10, Road # 05, Plot # 31, Uttara, <br> Dhaka 1230 </a>
                            <a href="#">+880 123 456 789</a>
                            <a href="#">(626) 935-3026</a>
                            <a href="#">info@thethemspro.com</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Envoyer nous un Message</h2>
                    <form class="contact_box" method="POST" action="{{ route('postMail') }}">
                     {{ csrf_field() }}
                        <input type="text" class="form-control input_box" placeholder="Nom *" id="nom" name="nom" required>
                        <input type="text" class="form-control input_box" placeholder="Prenom *" name="prenom"required>
                        <input type="text" class="form-control input_box" placeholder="Votre Email *" name="email" required>
                        <input type="text" class="form-control input_box" placeholder="Sujet" name="sujet" required>
                        <textarea class="form-control input_box" placeholder="Message" name="message" required></textarea>
                        <button type="submit" class="btn btn-default">Envoyer</button>
                    </form>
                    <div> @if (session('messageenvoyer')) 
                   <div align="left"> 
                       <h5>
                          {{ session('messageenvoyer') }}
                       </h5> 
                   </div>
                         @endif</div>
                </div>
            </div>
        </div>
    </section>
    <!-- End All contact Info -->
@stop