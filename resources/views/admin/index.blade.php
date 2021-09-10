<!DOCTYPE html>
<html>

<head>

    <x-meta/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles


</head>

<body>

<div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        @if (file_exists('files/profile/'.auth()->user()->image))
                            <img alt="image" class="rounded-circle" src="{{asset('files/profile/'.auth()->user()->image)}}"/>
                            @else
                            <img alt="image" class="rounded-circle" src="{{asset('files/profile/def.png')}}"/>
                        @endif
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{auth()->user()->name}}</span>
                            <span class="text-muted text-xs block">
                                @if (auth()->user()->role_id == null)Visitor
                                        @elseif (auth()->user()->role_id == 2)Admin
                                        @elseif (auth()->user()->role_id == 1)Full-admin
                                        @elseif (auth()->user()->role_id == 3)Editeur
                                        @elseif (auth()->user()->role_id == 4)RH
                                        @elseif (auth()->user()->role_id == 5)Logistique
                                        @endif
                                 <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                            <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                            <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                
                    
                
                <li class="@php if(url()->current()== 'http://fondationpanzi.org/blogs'){echo 'active';}@endphp">
                    <a href="{{ asset('/blogs') }}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Article</span></a>
                </li>
                <li class="@php if(url()->current()== 'http://fondationpanzi.org/blogs/create'){echo 'active';}@endphp">
                    <a href="{{ asset('/blogs/create') }}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Nouvelle articles</span></a>
                </li>
                <li class="@php if(url()->current()== 'http://fondationpanzi.org/pilier/create'){echo 'active';}@endphp">
                    <a href="{{ asset('/pilier/create') }}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">pilier</span></a>
                </li>
                <li class="@php if(url()->current()== 'http://fondationpanzi.org/activite'){echo 'active';}@endphp">
                    <a href="{{ asset('/activite') }}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Projet</span></a>
                </li>
                <li class="@php if(url()->current()== 'http://fondationpanzi.org/offre'){echo 'active';}@endphp">
                    <a href="{{ asset('/offre') }}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Offres</span></a>
                </li>
                <li class="@php if(url()->current()== 'http://fondationpanzi.org/offre/create'){echo 'active';}@endphp">
                    <a href="{{ asset('/offre/create') }}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Nouvelle offres</span></a>
                </li>
                <li class="@php if(url()->current()== 'http://fondationpanzi.org/user'){echo 'active';}@endphp">
                    <a href="{{ asset('/user') }}"><i class="fa fa-user"></i> <span class="nav-label">user</span></a>
                </li>
                <li>
                    <a href="minor.html"><i class="fa fa-th-large"></i> <span class="nav-label">Minor view</span> </a>
                </li>
            </ul>

        </div>
        
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li style="padding: 20px">
                        <span class="m-r-sm text-muted welcome-message">Bienvenue sur l'interface d'administration de FP-site</span>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages dropdown-menu-right">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="float-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="float-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a class="dropdown-item float-left" href="profile.html">
                                        <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="float-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html" class="dropdown-item">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="profile.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="float-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <a href="grid_options.html" class="dropdown-item">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="float-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html" class="dropdown-item">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
    
    
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="dropdown-item" type="submit"><i class="fa fa-sign-out"></i> Log out</button>
                        </form>
                    </li>
                    <li>
                        <a class="right-sidebar-toggle">
                            <i class="fa fa-tasks"></i>
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class=" m-t-lg">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <span class="label label-success float-right">Total</span>
                                        <h5>Publications</h5>
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins">
                                            @livewire('counter', ['modelname' => $modelname='blog', 'unit'=>'Articles'])
                                        </h1>
                                        <small>Nombre de publications</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>Audience brute</h5>
                                    </div>
                                    <div class="ibox-content">
                                                <h1 class="no-margins">
                                                    @livewire('counter', ['modelname' => $modelname='blog','table' => 'views', 'unit'=>'Vues'])
                                                </h1>
                                                <div class="stat-percent font-bold text-info">2% <i class="fa fa-level-up"></i></div>
                                                <small>consultation des articles</small>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-md-4">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <span class="label label-primary float-right">Global</span>
                                        <h5>Récolte de fonds</h5>
                                    </div>
                                    <div class="ibox-content">
            
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h1 class="no-margins">@livewire('counter', ['modelname' => $modelname='transaction','table' => 'amount', 'unit'=>'$'])</h1>
                                                <div class="font-bold text-navy">44% <i class="fa fa-level-up"></i> <small>Rapid pace</small></div>
                                            </div>
                                            <div class="col-md-6">
                                                <h1 class="no-margins">
                                                    @livewire('counter', ['modelname' => $modelname='transaction', 'unit'=>'Donations'])
                                                </h1>
                                            </div>
                                        </div>
            
            
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ibox ">
                                    <div class="ibox-title">
                                        <h5>Monthly income</h5>
                                        <div class="ibox-tools">
                                            <span class="label label-primary">Updated 12.2015</span>
                                        </div>
                                    </div>
                                    <div class="ibox-content no-padding">
                                        <div class="flot-chart m-t-lg" style="height: 55px;">
                                            <div class="flot-chart-content" id="flot-chart1"></div>
                                        </div>
                                    </div>
            
                                </div>
                            </div>
                        </div>
                        @yield("content")
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                late <strong>vertion</strong> H.admin-panel
            </div>
            <div>
                <strong>Copyright</strong> Herton.pro &copy; 2021-2024
            </div>
        </div>

    </div>
</div>


<x-script/>
@livewireScripts

</body>

</html>
