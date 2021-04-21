<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-meta />
</head>

<body class=" bg-light text-secondary">

    <head>
       <nav class="navbar navbar-expand-lg justify-content-center navbar-light bg-light fixed-top">
           <a class="navbar-brand">Brand</a>
           <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div id="my-nav" class="collapse navbar-collapse">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item active">
                       <a class="nav-link" href="#">Item 1 <span class="sr-only">(current)</span></a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Item 2</a>
                   </li>
               </ul>
           </div>
       </nav>
    </head>
    <div class="container-fluid" style="width: 2%">
        
    </div>
    <footer class="text-center">
        <p> Fondation Panzi RDC &copy; 2019</p>
    </footer>
</body>
@include('layouts.partials.-footerlink')

</html>
