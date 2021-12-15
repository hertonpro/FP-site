@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-12 mb-3">
            <div class="ibox-content">
                <div class="row m-2">
                    <h1 class="mr-auto p-2">Prévisualisation</h1>
                    <div class="col-lg-12">
                        @include('Components.foot')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="ibox ">
                <form action="">
                    <div class="ibox-title">
                        <h5><i class="fa fa-drivers-license"></i> Contactes</h5>
                        <div class="ibox-tools">

                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-sm" style="width:100%">
                                <form action="">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="colFormLabelSm" class="col-form-label-sm">Email</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <i class="fa fa-envelope input-group-text"></i>
                                                </div>
                                                <input type="mail" name="mail" class="form-control"
                                                    id="inlineFormInputGroupUsername" placeholder="info@fondationpanzi.org">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="colFormLabelSm" class="col-form-label-sm">Phone</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <i class="fa fa-phone input-group-text"></i>
                                                </div>
                                                <input type="phone" name="phone" class="form-control"
                                                    id="inlineFormInputGroupUsername" placeholder="+243 81 95 03 254">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="area" class="col-form-label-sm">Adresse</label>
                                            <textarea id="area" name="adresse" class="form-control" rows="3"
                                                placeholder="Bukavu, RDC, Q. Panzi, N0: 625"></textarea>
                                        </div>
                                        @csrf
                                        <div>
                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs">
                                                <strong>Enregistrer</strong>
                                            </button>
                                        </div>
                                </form>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <form action="">
                    <div class="ibox-title">
                        <h5>Réseau sociaux</h5>
                        <div class="ibox-tools">
                            <button type="button" class="btn btn-primary p-1" data-toggle="modal"
                                data-target="#exampleModal"> <i class="fa fa-share-alt"></i>
                                Ajouter</button>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-sm" style="width:100%">
                                <form action="">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="colFormLabelSm" class="col-form-label-sm">facebook</label>

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <i class="bi bi-facebook input-group-text"></i>
                                                </div>
                                                <input type="mail" name="facebook" class="form-control"
                                                    id="inlineFormInputGroupUsername"
                                                    value="https://www.facebook.com/PanziFoundationDRC/">
                                            </div>
                                        </div>
                                        @csrf
                                        <div>
                                            <button class="btn btn-sm btn-primary float-right m-t-n-xs">
                                                <strong>Enregistrer</strong>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </table>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Ajouter réseau social</h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <label for="colFormLabelSm" class="col-form-label-sm">Nom</label>
                                                    <div class="input-group">
                                                        <input type="mail" name="name" class="form-control"
                                                            id="inlineFormInputGroupUsername" placeholder="rezosocial">
                                                    </div>
                                                    <label for="colFormLabelSm" class="col-form-label-sm">Lien</label>
                                                    <div class="input-group">
                                                        <input type="mail" name="link" class="form-control"
                                                            id="inlineFormInputGroupUsername"
                                                            placeholder="https://www.rezosocial.com/PanziFoundationDRC/">
                                                    </div>
                                                </div>
                                                @csrf
                                                <div>
                                                    <button class="btn btn-sm btn-primary float-right m-t-n-xs">
                                                        <strong>Enregistrer</strong>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <form action="">
                    <div class="ibox-title">
                        <h5>Articles brouillons</h5>
                        <div class="ibox-tools">
                            <a href="/pilier/create" class="btn btn-primary p-1"> <i class="fa fa-paper-plane"></i> Tout
                                publier</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="table-responsive">
                            <table class="table table-sm" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Titre de l'article</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
