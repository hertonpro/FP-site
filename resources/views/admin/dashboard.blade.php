@extends('admin.index')

@section('content')
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
@endsection
