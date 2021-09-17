@extends('layouts.layout')

@section('content')
    <div class="container align-items-center">
        <h1 class=" display-2">Maison DORCAS</h1>
        <p class="h2 text-warning">Centre de transit et d’autonomisation des femmes</p>
        <img src="{{ asset('img/fp/dr.jpg') }}" style="width: 100%; height: 270px; object-fit: cover;"
            alt="la joie après prosses clinique juridique">
        <div class="row mt-4">
            <div class="col">

            </div>
            <div class="col-7">
                <p>
                    La Maison Dorcas, une des institutions de la Fondation Panzi, est un centre de transit et
                    d’autonomisation des femmes qui a offert, au cours de cette année, ses services aux femmes et filles
                    référées par le projet SVS (Survivantes des Violences Sexuelles) après une prise en charge médicale et
                    psychologique à l’HGR de Panzi. Le but de cette référence c’est pour leur pourvoir un hébergement
                    protégé et les formations pouvant leur permettre de regagner un pouvoir économique grâce à la formation
                    en alphabétisation fonctionnelle, en compétences d’affaires et aux métiers professionnels au retour dans
                    leurs milieux d’origine. </p>

                <p>Le centre leur a offert diverses opportunités pour une meilleure réintégration communautaire. Les filles
                    et les dépendants qui accompagnaient leurs mères et à l’âge scolaire ont été réintégrés dans le système
                    éducatif formel. Par ailleurs, celles ayant dépassées l’âge scolaire ont suivi la formation en
                    alphabétisation fonctionnelle les préparant ainsi aux métiers générateurs des revenus.</p>

                <p>Pour se rassurer d’une bonne réintégration sociale, le centre a aussi enregistré d’autres femmes
                    vulnérables de la communauté environnant le centre et elles ont reçu avec satisfaction les différents
                    services de la Maison Dorcas. Ceci nous a permis de réduire la stigmatisation pour les survivantes des
                    violences.</p>

                <p>Afin de faciliter une formation aisée et dans un climat d’accalmie, les enfants à l’âge préscolaire ont
                    été encadrés à l’espace de jeux par un staff dévoué composé des moniteurs et des baby sitters.</p>

                <p>Cependant, nous devrions souligner que suite à des réductions du niveau de financement, un partenaire
                    financier n’ayant plus libéré les fonds promis, une restructuration a été faite au sein de notre
                    programme et qui a fait l’objet des modifications et réaménagement du budget initial.</p>

                <p>Néanmoins, un autre partenaire PWRDF du Canada nous est venu en rescousse pour appuyer certaines
                    activités d’accompagnement des ayants droits. Cet appui nous a été d’une grande importance car ayant
                    renforcé le financement des partenaires existants. Grace aussi à ce partenariat, nous avons pu acquérir
                    les matériels et équipements pour la formation en soins de beauté.
                </p>
                

            </div>
            <div class="col-3">
                @include('components.offre')
            </div>
        </div>
    </div>

@endsection
