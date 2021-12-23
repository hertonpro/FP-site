@extends('admin.index')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="ibox-content">
                <h1 class="mr-auto p-2">Gesion de publications</h1>

                <H2 class="mr-auto p-2"> Nouveau publications</H2>
                @if (Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form role="publication" enctype="multipart/form-data" method="post" action="/publication">
                    @csrf
                    <div class="form-group">
                        <label>Titre</label><span class="text-danger">*</span>
                        <input class=" form-control" type="text" name="titre">
                    </div>

                    <div class="form-group">
                        <label>link</label><span class="text-danger">*</span>
                        <input class=" form-control" type="text" name="link">
                    </div>

                    <div class="form-group">
                        <label>abstract <span class="text-danger">500 caractères maximum</span></label>
                        <textarea class="form-control" rows="3" name="abstract"  maxlength="500"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Date de publication</label><span class="text-danger">*</span>
                        <input class=" form-control" type="date" name="datePub">
                    </div>
                    <div class="form-group">
                        <label>Editeur(s)</label><span class="text-danger">*</span>

                        <input class=" form-control" type="text" list="Suggestions" multiple="multiple" name="editeur" />
                        <label>Vous pouvez ajouter des éditeur en le séparant par une virgulle.</label>
                        <datalist id="Suggestions">
                            <option>Dr. Mukwege</option>
                            <option>Icar</option>
                            <option>autre</option>
                        </datalist>
                        <div class="form-group">
                            <label>Review</label><span class="text-danger">*</span>
                            <input class=" form-control" type="text" name="review">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label>Ajouter un document</label>
                        <input class=" form-file" type="file" name="doc"><br>
                        <p>Le document doit étre en format <strong>.pdf</strong></p>
                    </div>



                    <button class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Liste des publications</h5>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-sm" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Titre du publications</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($publications as $publication)
                                    <tr class="gradeX">
                                        {{-- @if ($publication->editeur == auth()->user()->id) --}}
                                        <td> <a href="/publication/{{ $publication->id }}">{{ $publication->titre }}</a>
                                        </td>
                                        <td>
                                            <a href="/publication/{{ $publication->id }}">
                                                <i class="fa fa-times"></i>
                                            </a>
                                            <a href="/publication/{{ $publication->id }}/edit">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="/publication/{{ $publication->id }}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </td>
                                        {{-- @endif --}}

                                    @empty
                                        <td class="text-warning">Pas de publications disponible !!!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const separator = ',';
            for (const input of document.getElementsByTagName("input")) {
                if (!input.multiple) {
                    continue;
                }
                if (input.list instanceof HTMLDataListElement) {
                    const optionsValues = Array.from(input.list.options).map(opt => opt.value);
                    let valueCount = input.value.split(separator).length;
                    input.addEventListener("input", () => {
                        const currentValueCount = input.value.split(separator).length;
                        // Do not update list if the user doesn't add/remove a separator
                        // Current value: "a, b, c"; New value: "a, b, cd" => Do not change the list
                        // Current value: "a, b, c"; New value: "a, b, c," => Update the list
                        // Current value: "a, b, c"; New value: "a, b" => Update the list
                        if (valueCount !== currentValueCount) {
                            const lsIndex = input.value.lastIndexOf(separator);
                            const str = lsIndex !== -1 ? input.value.substr(0, lsIndex) + separator : "";
                            filldatalist(input, optionsValues, str);
                            valueCount = currentValueCount;
                        }
                    });
                }
            }
            function filldatalist(input, optionValues, optionPrefix) {
                const list = input.list;
                if (list && optionValues.length > 0) {
                    list.innerHTML = "";
                    const usedOptions = optionPrefix.split(separator).map(value => value.trim());
                    for (const optionsValue of optionValues) {
                        if (usedOptions.indexOf(optionsValue) < 0) {
                            const option = document.createElement("option");
                            option.value = optionPrefix + optionsValue;
                            list.append(option);
                        }
                    }
                }
            }
        });
    </script>
@endsection
