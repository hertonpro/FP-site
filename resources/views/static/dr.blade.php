@extends('layouts.layout')

@section('content')
    <div class="container align-items-center">
        <h1 class=" display-2">Dr Denis Mukwege</h1>
        <p class="h2 text-warning">Contribuer à la lutte contre l’impunité</p>
        <img src="{{ asset('img/fp/jur.jpg') }}" style="width: 100%; height: 270px; object-fit: cover;"
            alt="la joie après prosses clinique juridique">
        <div class="row mt-4">
            <div class="col">

            </div>
            <div class="col-7">
                <p>
                    La Clinique Juridique est une des quatre institutions que compte la Fondation Panzi. Elle fut créée en
                    2008, par le Docteur Denis Mukwege, pour répondre aux demandes des survivantes qui manifestaient le
                    désir de voir leurs bourreaux répondre de leurs actes devant la justice.
                    <br>
                    L’objectif de la clinique juridique est de faciliter l’accès à la justice aux victimes de violences
                    sexuelles et basées sur le genre.
                    <br>
                    <strong>Sa mission est de contribuer à la lutte contre l’impunité.</strong>
                    <br>
                    La porte d’entrée des victimes :
                    <br>
                    Les victimes accèdent à l’assistance de la clinique juridique, soit à travers l’hôpital de Panzi ou à
                    travers les cliniques juridiques locales.
                </p>
                <h1>DOMAINE D’INTERVENTION</h1>
                <p>
                <h2>L’Assistance juridique</h2>
                l’assistance juridique se fait à
                travers des activités de prévention telles que les sensibilisations des communautés sur les
                droits, la vulgarisation des instruments juridiques nationaux et internationaux relatifs aux
                droits humains en général et aux droits de la femme en particulier. Ces activités sont
                exécutées par les avocats, les défenseurs judiciaires et les para juristes commis au projet,
                chacun dans son domaine.
                Les paras juristes jouent à la fois un rôle de moniteurs de protection et de relais
                communautaires
                <img src="{{ asset('img/fp/jur.jpg') }}" style="width: 100%; "
            alt="la joie après prosses clinique juridique">
                <h2>La consultation gratuite:</h2>
                Elle est effectuée par les juristes et para juristes. La consultation porte sur trois activités principales:
                l’écoute des bénéficiaires, les conseils légaux et l’orientation des victimes.

                <h2>La Sensibilisation:</h2>
                Production et multiplication des dépliants.
                Production des émissions à la radio.
                Vulgarisation des instruments juridiques nationaux, régionaux et internationaux de protection de droits de
                la femme.
                L’Education au Droit : Elle est faite à l’égard des femmes victimes des violences sexuelles et basées sur le
                genre, pour les informer sur leurs droits, et à l’égard des jeunes, afin de les outiller sur la lutte contre
                les violences.
                <h2>La Formation:</h2>
                La clinique juridique organise des séances de formation à l’égard des:

                Des para-juristes: la formation est axée sur l’accompagnement juridique des victimes.
                Des leaders locaux: afin de les outiller pour orienter les victimes, et leur apporter une première
                assistance.
                L’Assistance judiciaire
                L’assistance judiciaire consiste à l’assistance directe et complète des survivantes des violences sexuelles,
                auprès des juridictions, par des avocats.

                L’assistance judiciaire est offerte gratuitement par la clinique juridique. Ainsi, les frais de justice, les
                honoraires des avocats, ainsi que le transport et le séjour des survivantes (pour celles qui viennent de
                loin) sont supportés par la Clinique juridique.

                Présentement, la clinique juridique prend également en charge le transport, ou le déplacement, des présumés
                auteurs et les policiers qui les accompagnent par manque des moyens logistiques au sein de nos juridictions.
                </p>
                <h1>STRATÉGIES</h1>
                <p>
                    Mise en place des cliniques juridiques locales dans les territoires de la province du Sud Kivu.
                    Actuellement 5 cliniques juridiques locales sont fonctionnelles : à Kabare, plus précisément à Kavumu, à
                    Kalehe, dans le centre de Ihusi, à Bulenga, dans la zone de santé de Minova, à Walungu dans la zone de
                    santé de Walungu et à Kaniola.
                    Organisation des audiences foraines, dans le souci d’approcher la justice des justiciables (pour pallier
                    au manque des juridictions compétentes dans certains milieux) ;
                    Mettre à la disposition des communautés des para juristes, qui sont des relais communautaires, afin de
                    jouer le rôle d’éclaireurs pour assurer l’assistance des victimes, pour apporter les informations
                    nécessaires sur le droit de la femme et pour lutter contre l’impunité ;
                    Faire fonctionner les maisons de transit pour prendre en charge le séjour des victimes et leurs
                    accompagnateurs lors des procédures ou rendez-vous de justice ainsi qu’assurer la protection des
                    victimes contre les représailles des présumés auteurs lors des phases préliminaires de la procédure ;
                    Collaboration avec d’autres partenaires qui travaillent dans le même domaine d’intervention.
                </p>
                <h1>DEFIS</h1>
                <p>
                    L’impunité: longue procédure, des amnisties, les libérations provisoires, la protection des certains
                    coupables par les dirigeants ;<br>
                    L’absence de la réparation: manque d’exécution des jugements prononcés, d’indemnisation judiciaire ou
                    extra judiciaires ;<br>
                    L’absence d’une justice transitionnelle: certains coupables sont encore aux affaires politiques dans le
                    pays ;<br>
                    Méfiance des actions par certains dirigeants ;<br>
                    Dysfonctionnement de l’appareil judiciaire congolais ;<br>
                    Évasion des détenues suite à l’état de délabrement avancé des maisons carcérales ;<br>
                    Insécurité agrandissant et qui empêche l’atteinte des présumés auteurs.
                </p>
            </div>
            <div class="col-3">
                <x-offre></x-offre>
            </div>
        </div>
    </div>

@endsection
