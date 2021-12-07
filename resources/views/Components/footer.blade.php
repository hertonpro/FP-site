
<footer class="row page-footer font-small pt-4 bg-secondary ">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

        <!-- Grid row -->
        <div class="row">
            <div class="col">

            </div>

            <!-- Grid column -->
            <div class="col-md-3 mt-md-0 mt-3 ml-5  text-white">

                <!-- Content -->
                <h5 class="text-uppercase">Contacts</h5>
                
                <p>{{$infogenerals->mail}}</p>
                <p>{{$infogenerals->phone}}</p>
                <p>{{$infogenerals->adresse}}</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1523.8016756575707!2d28.868613734458233!3d-2.5432525996105126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19c2918799eb9523%3A0xace96dcc8e2fda95!2sMaison%20dorcas!5e0!3m2!1sfr!2srw!4v1638431035841!5m2!1sfr!2srw" width="450" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="my-4 text-warning">
                    <ul class="list-unstyled list-inline mb-0">
                        @foreach ($socials as $social)
                            <li class="list-inline-item me-3">
                                <a href="{{$social->link}}" target="_blank">
                                    <i class=" btn-primary bi bi-{{ strtolower($social->name) }} input-group-text"></i>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-2 mb-md-0 mb-3  text-white">

                <!-- Links -->
                <h5 class="text-uppercase">Raccoursis</h5>

                <ul class="list-unstyled">
                    <li><a style="color: gainsboro" href="/dr">Dr. Drenis Mukwege</a></li>
                    <li><a style="color: gainsboro" href="/rapport">Rapport annuel</a></li>
                    <li><a style="color: gainsboro" href="cat/Panzi-news">Panzi news </a></li>
                    <li><a style="color: gainsboro" href="galerie">Galerie</a></li>
                    <li><a style="color: gainsboro" href="/contact#fund">Fundraising</a></li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3 ">

                <!-- Links -->
                <h5 class="text-uppercase text-white">Contactez-nous</h5>
                <form action="contactmessage" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="texte" placeholder="Sujet" name="sujet"
                            class="form-control rounded form-control-sm">
                        <input type="texte" id="name" placeholder="Nom" name="exp_nom"
                            class="mt-2 form-control rounded form-control-sm">
                        <input type="mail" id="email" placeholder="E-mail" name="exp_mail"
                            class=" mt-2 form-control rounded form-control-sm">
                        <textarea class="form-control rounded mt-2" placeholder="Ecrivez-votre message" id=""
                            cols="20" rows="5" name="message"></textarea>
                        <button class="btn btn-primary mt-2" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
            <!-- Grid column -->
            <div class="col">

            </div>
        </div>
        <!-- Grid row -->
    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="col-12 footer-copyright text-center bg-dark py-3">© 2021 Copyright:
        <a style="color: gainsboro" href="https://fondationpanzirdc.org/"> fondationpanzirdc.com</a>
    </div>
    <!-- Copyright -->

</footer>