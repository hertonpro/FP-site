@extends('layouts.layout')

@section('content')
    <div class="container align-items-center">
        <h1 class=" display-2">Fondation <strong class=" warning">PANZI</strong></h1>
        <p class="h2 text-warning">Contribuer à la lutte contre l’impunité</p>
        <img src="{{ asset('img/fp/fp.gif') }}" style="width: 100%; height: 270px; object-fit: cover;"
            alt="la joie après prosses clinique juridique">
        <div class="row mt-4">

            <div class="col-9">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#panzi" role="tab"
                            aria-controls="home" aria-selected="true">Le modèl de Panzi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="eq-tab" data-toggle="tab" href="#eq" role="tab" aria-controls="eq"
                            aria-selected="false">Notre équipe</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="panzi" role="tabpanel" aria-labelledby="panzi-tab">

                        <p class="h2 text-warning">Modèle de Panzi</p>
                        <p>
                            le modèle de guérison holistique mondialement reconnu des quatre piliers de l’hôpital panzi et
                            de la
                            fondation vise à répondre à tous les besoins des victimes de violences sexuelles, des femmes
                            victimes de
                            traumatismes gynécologiques complexes et des populations vulnérables du sud-kivu. nous créons un
                            espace
                            sûr et propice à la guérison, qui favorise non seulement la guérison physique des femmes, mais
                            favorise
                            leur rétablissement émotionnel, les aide à reconstruire leurs moyens de subsistance et contribue
                            à la
                            restauration durable et à long terme de leurs communautés.
                            la famille de l'hôpital et des fondations de panzi a fourni un soutien apaisant et soignant à
                            plus de 85
                            000 femmes et filles, dont plus de 50 000 ont été victimes de violences sexuelles. nous vous
                            invitons à
                            rencontrer l'une de ces femmes: furaha.
                        </p>
                        <h2>Soins physiques</h2>
                        <p>
                            À Panzi, les victimes de violences sexuelles ont accès à des services médicaux de classe
                            mondiale. Avec
                            370 médecins, infirmières et personnel de soutien qualifiés et dévoués, utilisant des
                            équipements
                            modernes que l’on ne trouve pas dans d’autres hôpitaux congolais, Panzi offre la meilleure et
                            souvent la
                            seule possibilité de soins médicaux dans la région. Près de 18 000 consultations sont effectuées
                            chaque
                            année à l'hôpital et dans ses cliniques de proximité en milieu rural. L'hôpital dispose de 450
                            lits,
                            dont 250 sont dédiés aux victimes de violences sexuelles et aux femmes nécessitant des soins
                            gynécologiques complexes.
                            L'hôpital est situé à 8 kilomètres du centre de Bukavu, dans l'est de la RDC. Il s'agit de
                            l'hôpital
                            général de référence reconnu pour la zone de santé d'Ibanda, qui dessert une population de plus
                            de 400
                            000 habitants et accepte des patients de toute la région. Au fil des ans, l'hôpital a étendu ses
                            services pour répondre aux besoins de la population, avec des départements de médecine interne
                            générale,
                            de chirurgie, de gynécologie et d'obstétrique et de pédiatrie. Panzi accueille également des
                            services de
                            consultations externes tels que des cliniques de médecine familiale, des oto-rhino-laryngologie
                            (ORL),
                            une clinique dentaire, un optométriste; une unité de radiologie; et un programme de dépistage du
                            cancer
                            du col utérin.
                            La Fondation Panzi est profondément reconnaissante aux nombreux partenaires dévoués de l'hôpital
                            Panzi,
                            qui apportent un soutien essentiel à ses services de guérison physique. Bien que la Fondation
                            Panzi ait
                            été créée à l'origine pour répondre aux besoins des femmes et des filles au-delà du traitement
                            physique,
                            nous nous efforçons, le cas échéant, de combler les lacunes de financement pour ce service de
                            première
                            ligne.
                        </p>
                        <img src="{{ asset('img/fp/gerr.gif') }}" style="width: 100%; height: 500px; object-fit: cover;"
                            alt="Photo une femme en joie " class="m-2">
                        <p>
                        <p>
                            L’hôpital Panzi est réputé dans le monde entier pour ses services de premier ordre traitant les
                            victimes
                            de violences sexuelles et de blessures gynécologiques complexes. Chaque femme collabore avec nos
                            médecins et nos cliniciens pour créer un parcours de guérison sur mesure, comprenant des options
                            de
                            traitement physique et psychologique.
                            Dès ses premiers instants, chaque patiente collabore étroitement avec une assistante sociale
                            pour faire
                            en sorte que son traitement réponde à tous ses besoins physiques et psychologiques initiaux.
                            Pour les
                            patientes pouvant rentrer chez elles, notre personnel les accompagne chez elles et propose une
                            médiation
                            et des conseils pour aider la réintégration de chaque femme.
                            En 2015, l'hôpital Panzi (non compris ses cliniques rurales) a accueilli 2533 femmes atteintes
                            de
                            lésions gynécologiques complexes résultant non seulement du viol brutal qui a caractérisé les
                            deux
                            décennies de guerre au Congo, mais également d'accouchements prolongés, obstrués et compliqués
                            dans des
                            zones où l'accès à des soins de qualité est essentiel. les soins maternels constituent un défi
                            de taille
                            (1877 des 2533 femmes ont été victimes de viol). Nous croyons que toutes les femmes méritent
                            d'avoir
                            accès à des services de guérison et les acceptons dans notre programme Survivors of Sexualized
                            Violence
                            (SSV) en fonction de leurs blessures et non en fonction de la manière dont elles ont été subies.
                        </p>
                        <h2>Support psychosocial</h2>
                        <p>
                            Lorsque les premiers survivants sont arrivés à l'hôpital Panzi en 1999, le Dr Mukwege et le
                            personnel de
                            Panzi ont compris que cela ne suffirait pas. De nombreux survivants ne rencontrent pas
                            immédiatement de
                            difficultés de récupération physique complexe, nécessitant souvent plusieurs interventions
                            chirurgicales
                            sur une longue période. Le traitement de première ligne à Panzi est donc psychologique.

                            Une femme qui arrive pour la première fois à Panzi rencontre un assistant social qui lui fournit
                            une
                            première évaluation et commence à travailler avec elle. Ce n’est qu’après chaque femme qu’elle
                            est jugée
                            en bonne voie pour se faire opérer.

                            Les survivantes ont continuellement accès à un soutien psychosocial, notamment à une thérapie de
                            groupe
                            et à des innovations révolutionnaires telles que notre programme de musicothérapie, par le biais
                            des
                            programmes de notre centre de suivi, Maison Dorcas. Ici, les survivants et les membres
                            vulnérables de la
                            communauté joignent leurs chemins – non pas isolément, mais ensemble. Travailler côte à côte
                            avec les
                            femmes de la communauté aide à éliminer les stigmates et les barrières sociales, en renforçant
                            le réseau
                            de soutien de chaque femme et en la renforçant davantage.
                        </p>
                        <h3>LA GUÉRISON PAR LA MUSIQUE</h3>
                        <p><img src="{{ asset('img/fp/chante.gif') }}" style="height: 270px; object-fit: cover;"
                                alt="Photo une femme en joie " align="left" class="mr-4">
                        <p>
                            Notre nouveau programme innovant de musicothérapie, mis en œuvre en partenariat avec le
                            personnel de
                            laFondation Panzi RDC à la Maison Dorcas et de Make Music Matter, et avec le soutien du Fonds
                            d’innovation humanitaire, aide les survivants, les femmes, les enfants vulnérables et le
                            personnel de
                            Panzi à utiliser le pouvoir de guérison de la musique se remettre d’expériences traumatiques
                            passées. En
                            savoir plus
                        </p> <br><br><br><br><br><br>
                        <h2>Réintegration communautaire</h2>
                        <img src="{{ asset('img/fp/1.gif') }}" style="height: 270px; object-fit: cover;"
                            alt="Photo une femme en joie " align="left" class="mr-4">
                        <p>

                            40 à 60% des femmes qui se font soigner à l’hôpital Panzi ne peuvent pas retourner dans leur
                            pays
                            d’origine, en raison de l’ampleur de leurs blessures, de la violence actuelle ou, le plus
                            souvent, de la
                            stigmatisation profonde entourant la violence sexuelle et la fistule. Ces femmes peuvent
                            continuer leur
                            cheminement de guérison, aux côtés de femmes vulnérables des communautés environnantes, dans
                            notre
                            centre de soins innovant de la Maison Dorcas.

                            Ici, les femmes et les filles (et leurs enfants à charge) bénéficient d'un logement, de repas et
                            d'un
                            accès à des soins thérapeutiques continus. Nos programmes de réintégration économique et
                            communautaire
                            aident également les femmes à reconstruire leur vie économique et à bâtir un avenir plus stable.
                            Aux
                            côtés de membres vulnérables de la communauté, les survivantes participent à des programmes de
                            formation
                            de 12 mois comprenant des cours d'alphabétisation et de mathématiques, des compétences
                            professionnelles,
                            des micro-subventions et des prêts pour aider les femmes à lancer des micro-entreprises et des
                            projets
                            de sensibilisation dans les communautés rurales.
                        </p>
                        <h2>Assistance légale</h2>
                        <p>
                            40 à 60% des femmes qui se font soigner à l’hôpital Panzi ne peuvent pas retourner dans leur
                            pays
                            d’origine, en raison de l’ampleur de leurs blessures, de la violence actuelle ou, le plus
                            souvent, de la
                            stigmatisation profonde entourant la violence sexuelle et la fistule. Ces femmes peuvent
                            continuer leur
                            cheminement de guérison, aux côtés de femmes vulnérables des communautés environnantes, dans
                            notre
                            centre de soins innovant de la Maison Dorcas.

                            Ici, les femmes et les filles (et leurs enfants à charge) bénéficient d'un logement, de repas et
                            d'un
                            accès à des soins thérapeutiques continus. Nos programmes de réintégration économique et
                            communautaire
                            aident également les femmes à reconstruire leur vie économique et à bâtir un avenir plus stable.
                            Aux
                            côtés de membres vulnérables de la communauté, les survivantes participent à des programmes de
                            formation
                            de 12 mois comprenant des cours d'alphabétisation et de mathématiques, des compétences
                            professionnelles,
                            des micro-subventions et des prêts pour aider les femmes à lancer des micro-entreprises et des
                            projets
                            de sensibilisation dans les communautés rurales.
                        </p>
                        <img src="{{ asset('img/fp/jur.jpg') }}" style="width: 100%; "
                            alt="la joie après prosses clinique juridique">
                        <h2>Education et plaidoyer </h2>
                        <p>
                            Nous devons travailler pour endiguer le flot de survivants qui arrivent chaque jour à notre
                            porte en
                            guérissant non seulement les corps, les esprits et les vies, mais également les familles, les
                            communautés et la nation dans laquelle ils vivent.

                            La société civile au Congo est devenue une force puissante et inspirante, capable de créer un
                            changement
                            significatif et positif. Notre équipe de Panzi s'emploie à renforcer davantage la société civile
                            et à
                            s'attaquer aux problèmes fondamentaux à l'origine de la violence et des conflits au Congo.

                        <h3>AU CONGO</h3>

                        Le programme novateur Badilika (Change) de Panzi vise à responsabiliser davantage le gouvernement
                        congolais
                        et les autorités locales afin de protéger les droits de l’homme, de réduire la vulnérabilité des
                        femmes et
                        d’appliquer la bonne gouvernance. En faisant des investissements critiques dans des organisations
                        locales de
                        la société civile congolaise et en fournissant un soutien technique et des formations, notre
                        personnel de
                        Badilika veille à ce que tous les citoyens congolais connaissent leurs droits, leurs responsabilités
                        et la
                        responsabilité qu’ils doivent pouvoir attendre de leurs dirigeants. Notre équipe a travaillé avec
                        plus de
                        750 organisations populaires de la société civile dans les provinces du Sud-Kivu, du Nord-Kivu et du
                        Maniema. Bâtissant et soutenant des coalitions, Panzi renforce la capacité de la société civile à
                        s’attaquer
                        aux causes profondes de la violence et à reconstruire les communautés congolaises sur la base des
                        principes
                        des droits de l’homme et de l’égalité des sexes.

                        Avec le soutien de notre projet Badilika, cette organisation de la société civile s'emploie à
                        rétablir la
                        justice pour des centaines de familles du Sud-Kivu dont les maisons ont été démolies sans procédure
                        régulière ni indemnisation.
                        Les organisations soutenues par Badilika font de réels progrès dans leurs propres communautés. L'un
                        d'entre
                        eux a fermé des maisons closes complices du recrutement de jeunes filles dans la prostitution et a
                        lancé un
                        recours collectif en réparation visant à obtenir réparation des familles vulnérables dont les
                        maisons ont
                        été démolies sans compensation.

                        Les organisations soutenues par Badilika font de réels progrès dans leurs propres communautés. L'un
                        d'entre
                        eux a fermé des maisons closes complices du recrutement de jeunes filles dans la prostitution et a
                        lancé un
                        recours collectif en réparation visant à obtenir réparation des familles vulnérables dont les
                        maisons ont
                        été démolies sans compensation.
                        <h3>INTERNATIONALEMENT</h3>

                        M. Mukwege s'est engagé à utiliser sa plate-forme internationale pour faire entendre la voix des
                        femmes, des
                        communautés vulnérables et des dirigeants de la société civile dans les salles du pouvoir
                        international.
                        Nous tenons des réunions de haut niveau avec des personnalités telles que l'ambassadrice américaine
                        auprès
                        de l'ONU, Samantha Power, le secrétaire général des Nations Unies, Ban Ki-Moon, et des membres du
                        Conseil de
                        sécurité nationale des États-Unis à la Maison Blanche. Ces réunions nous permettent de nous assurer
                        que les
                        voix congolaises sont au premier plan des discussions sur les politiques.
                        </p>
                        <h3>Innovations sur le terrain</h3>
                        <p>
                            Panzi s'est engagé à intégrer et à innover les meilleurs et les plus efficaces traitements pour
                            notre
                            modèle de guérison holistique. Nous mettons en œuvre de nouvelles techniques révolutionnaires et
                            appuyons nos travaux sur les recherches nécessaires pour évaluer, itérer et poursuivre notre
                            innovation.

                        <h3>LA GUÉRISON PAR LA MUSIQUE</h3>

                        Notre nouveau programme innovant de musicothérapie, mis en œuvre en partenariat avec le personnel de
                        la
                        Fondation Panzi RDC à la Maison Dorcas et de Make Music Matter, et avec le soutien du Fonds
                        d’innovation
                        humanitaire, aide les survivants, les femmes, les enfants vulnérables et le personnel de Panzi à
                        utiliser le
                        pouvoir de guérison de la musique se remettre d’expériences traumatiques passées.

                        Dans les cohortes, les participants travaillent avec un psychologue et un producteur de musique
                        professionnel pour écrire et enregistrer des chansons puissantes dans le studio d’enregistrement
                        ultramoderne du programme, construit sur le campus de la Maison Dorcas. Les chansons sont diffusées
                        à la
                        radio, sur les médias sociaux et lors de concerts communautaires, dissipant la stigmatisation
                        suscitée par
                        la violence sexuelle et d’autres problèmes isolants
                        </p>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p class="mt-4">
                            <!--historique-->
                            <img class=" p-2" src="{{asset('files/other/home.jpg')}}" style="width: 50%; margin-left:50px object-fit: cover;"
                            alt="Photo une femme en joie " align="left" >

                            Comme Martin Luther King, j’ai un rêve, celui de fermer le pavillon des Survivantes de Violences
                            Sexuelles de l’Hôpital de Panzi. Ce rêve est un rêve global, il signifierait que les violences
                            auraient
                            cessées, il signifierait que plus jamais les salles d’opération de l’hôpital, ne devraient
                            soigner nos
                            précieuses femmes et filles de toute l’horreur que représente la violence sexuelle en temps de
                            guerre.
                            Une barbarie humaine orchestrée par une soif de profit qui dépasse toute notion de respect de
                            l’autre,
                            de respect de la vie humaine, de respect des valeurs élémentaires qui nous permettent de vivre
                            ensemble.
                            Chers partenaires, ce qui nous lie aujourd’hui ne devrait pas être. Quand pourrons-nous nous
                            rencontrer en temps de paix ?
                            Cette année fut marquante, la douleur des femmes congolaises a été mise en lumière partout dans
                            le
                            monde, une reconnaissance qui change beaucoup de choses.</p>
                            <p>Le Prix Nobel de Paix a permis à ceux
                            qui ignoraient encore la douleur de leurs semblables vivant à des milliers de kilomètres, mais
                            aussi
                            parfois à une petite dizaine de kilomètre seulement, de prendre conscience que l’impensable
                            existe.
                            La reconnaissance est primordiale dans le processus de guérison d’une victime de violences
                            sexuelles.
                            Reconnaitre la peine de l’autre, c’est avoir de la considération pour ce qu’il a vécu. La honte
                            change
                            alors de camps et la vie peut recommencer à être remplie d’espoir.
                            Cette reconnaissance, constitue également les premières pierres du chemin vers la vérité
                            historique,
                            une histoire trop souvent cachée ou biaisée car dérangeant les plus hautes sphères. Qu’allons
                            nous
                            faire de ces vérités ? Dans beaucoup de pays, les enfants s’en vont à l’école, jouent, mangent à
                            leur faim et se forment pour devenir les citoyens responsables qui, demain, prendront les
                            décisions
                            importantes pour la société. A l’Est de la RDC, les enfants qui ont aujourd’hui 20 ans ont, pour
                            certains, appris à devenir des violeurs. Soit en ayant été entrainés par des milices, soit en
                            ayant été témoins des pires sévices sur leurs mamans, leurs soeurs ou leur voisinage, ce qui les
                            a rendus
                            totalement schizophrènes. Ils sont devenus des tueurs, car violer, surtout avec une telle
                            violence, c’est
                            en fait tuer la victime dans son être, son mental, mais c’est également tuer sa famille, sa
                            communauté
                            et la société tout entière. Une société dont nos mamans sont les piliers depuis toujours, une
                            société
                            dont elles garantissent l’équilibre.
                            Lorsque je parcours le bilan annuel de la Fondation Panzi de cette année, j’ai de l’espoir. A
                            travers le
                            travail de nos équipes, basé sur la mise en pratique des 4 piliers qui composent le Modèle de
                            Panzi,
                            nous voyons que, même dans l’adversité, chacun peut trouver la force en soi de se relever.
                            Grâce à la générosité de personnes originaires du monde entier, la Fondation Panzi peut mener à
                            bien ses projets d’aide à la réinsertion économique, d’aide à l’accès à la justice, d’aide
                            psychosocial
                            combinée avec l’aide médicale apportée par l’Hôpital de Panzi qui fêtera ses 20 ans l’année
                            prochaine.
                            C’est avec une vive émotion que, cette année encore, je note la réussite scolaire de nos enfants
                            sortis
                            des mines de Luhwindja et de Kamituga, c’est avec un grand sourire que j’écoute ces chansons
                            puissantes et touchantes enregistrées lors des séances de musicothérapie. C’est avec joie que je
                            reçois
                            chaque jour chez moi, dans l’enceinte de l’Hôpital de Panzi, le fruit du labeur de ces femmes
                            qui ont
                            su transformer leur désespoir en une combativité hors norme en devenant un symbole de réussite
                            par
                            le travail dans leur communauté. Ainsi, je me régale de la production de prunes, de salades ou
                            encore
                            de jus de fruits frais par nos mamans, femmes de pouvoir et fierté pour la nation congolaise.
                            Comment peut-on penser à baisser les bras lorsque l’on voit le courage avec lequel elles se
                            relèvent.
                            Comment peut-on penser en avoir le droit ?
                            Le Congo ne fléchira pas tant qu’il y aura ces trésors, ces femmes combatives que rien ne peut
                            arrêter
                            lorsqu’elles ont repris confiance en elle et qu’elles retrouvent leur dignité.
                            De Mwenga, à Goma, en passant par Bulenga, Bukavu et Kavumu, les projets de la Fondation Panzi
                            génèrent aujourd’hui des milliers de succes stories qui nous encouragent chaque jour à continuer
                            à
                            travailler d’arrache-pied et à militer pour la vérité et pour obtenir justice et réparations.
                            <br><br>
                            La Fondation Panzi a été créée en 2008 par le Dr. Denis Mukwege.
                            Située dans le quartier Panzi dans la commune d’Ibanda à Bukavu
                            en République Démocratique du Congo, la Fondation Panzi fait le
                            relais du travail du Dr. Denis Mukwege et de son hôpital, l’Hôpital
                            de Panzi, afin de permettre la reconstruction psychologique et
                            physique ainsi que la réinsertion sociale des victimes de violences
                            sexuelles.
                            Depuis 9 ans, la Fondation Panzi se veut être la voix des
                            opprimées, des victimes, des filles et mamans congolaises qui
                            subissent tous les jours l’inimaginable dans cette région du monde
                            tant convoitée pour son sous-sol, mais dont les habitants sont
                            laissés pour compte.
                            Le Dr. Mukwege a mis au point un modèle de prise en charge
                            qui permet de soigner les victimes et survivantes de violences
                            sexuelles d’une manière holistique.
                            Ce modèle est fondé sur 4 piliers interdépendants qui permettent
                            aux victimes de se reconstruire d’une façon pérenne après leur
                            passage à l’hôpital et à la Fondation Panzi. Les femmes rentrent
                            dans un circuit complet dans lequel tout est mis en place afin
                            de leur permettre de retrouver leur dignité perdue. Il s’agit du «
                            Guichet Unique » également appelé « One Stop Center ».
                            La Fondation Panzi met en application ces 4 piliers, fondamentaux
                            pour la reconstruction des victimes, à travers plusieurs projets.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="eq" role="tabpanel" aria-labelledby="eq-tab">
                        <div class="container py-3">
                            <div class="title h1 text-center">Conseil d'administration</div>
                            <!-- Card Start -->
                            <div class="card m-2">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <img class="d-block w-100" src="{{ asset('files/dr.jpg') }}" alt="">
                                    </div>
                                    <div class="col-md-7 px-3">
                                        <div class="card-block px-6">
                                            <h4 class="card-title">Dr. Denis Mukwege</h4>
                                            <p class="text-warning">Président - MD, PHD (Prix nobel)</p>
                                            <p class="card-text">Le Dr Denis Mukwege, lauréat du prix Sakharov 2014, a
                                                fondé
                                                l’hôpital Panzi en 1999 en réponse à la guerre dévastatrice qui a entouré sa
                                                communauté dans les provinces orientales de la République démocratique du
                                                Congo. L’hôpital dessert aujourd’hui une population de 400 000 habitants en
                                                tant qu’Hôpital Général de Référence pour la Zone de Santé d’Ibanda en RDC,
                                                avec une gamme complète de services de santé.</p>
                                            <p class="card-text">En conséquence directe de la guerre, la mortalité
                                                maternelle était en hausse. La sécurité de toutes les femmes et de toutes
                                                les filles a été affectée par des forces brutales qui ont ravagé leur corps
                                                de façon inimaginable. Le premier patient du Dr Mukwege était un survivant
                                                de viol, dont les organes reproducteurs avaient été brutalement détruits.
                                                Alors que la violence contre les femmes et les filles s’intensifiait
                                                dramatiquement dans le contexte des guerres au Congo, le Dr Mukwege et le
                                                personnel de l’hôpital Panzi ont consacré des ressources importantes au
                                                traitement des femmes souffrant de fistule et d’autres blessures
                                                gynécologiques complexes – traumatiques et obstétriques <a href="/dr"
                                                    class="text-warning">...Lire plus</a></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of card -->
                        </div>
                        <div class="card float-right border-0 col-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img class="d-block w-100" src="{{ asset('files/ti.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-block">
                                        <h4 class="card-title">DR. AMISI NOTIA CHRISTINE</h4>
                                        <p class="text-warning">Sécretaire Executive</p>
                                        <p>Dr Christine Amisis « Dr. Tina » est la secrétaire exécutive de la Fondation
                                            Panzi. Elle est la responsable de la mise en œuvre du modèle holistique de
                                            réparation de la Fondation Panzi. Le Dr Tina est également une championne
                                            intrépide des femmes, et médecin exerçant à Panzi dans le service OB-GYN,
                                            spécialisée dans les fistules urogénitales.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 col-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <img class="d-block w-100" src="{{ asset('files/ds.jpg') }}" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-block">
                                        <h4 class="card-title">CHRISTINE SCHULER DESCHRYVER</h4>
                                        <p class="text-warning">Vice-Présidente</p>
                                        <p>Christine Schuler Deschryver « Mama Christine » est la vice-présidente de la
                                            Fondation Panzi et l'un des leaders les plus influents et inspirants de
                                            l'organisation. En plus de ses responsabilités de gestion chez Panzi, elle est
                                            également co-fondatrice et directrice de City of Joy, une communauté de
                                            leadership transformationnel pour les femmes victimes de violence à Bukavu. </p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="title h1 text-center m-4">Staff</div>
                        <div class="row">
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="{{ asset('files/4.png') }}" alt="Admin" class="rounded-circle"
                                                width="150">
                                            <div class="mt-3">
                                                <h4>MARTIN OBIERO</h4>
                                                <p class="text-secondary mb-1">Directeur Administratif & Financier</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/3.png') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>BERTIN RUTEGA</h4>
                                            <p class="text-secondary mb-1">Directeur des Programmes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/2.png') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>NATHALIE BUNGILIA</h4>
                                            <p class="text-secondary mb-1">Chargé des Ressources Humaines</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/10.jpg') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>Crispin Kashale</h4>
                                            <p class="text-secondary mb-1">Directeur de Communication</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/8.jpg') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>Ntumba muzadi Pierrot</h4>
                                            <p class="text-secondary mb-1">Responsable logistique</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/9.jpg') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>Patrick Musafiri</h4>
                                            <p class="text-secondary mb-1">IT Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 col">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="{{ asset('files/11.jpg') }}" alt="Admin" class="rounded-circle"
                                            width="150">
                                        <div class="mt-3">
                                            <h4>Augustin Kulimushi</h4>
                                            <p class="text-secondary mb-1">Comptable principal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section>
            </div>
            <div class="col-3">
                @include('Components.offre')
            </div>
        </div>
    </div>

@endsection
