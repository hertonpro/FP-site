<div>
    @if (file_exists('files/doc/offre_' . $file . '.pdf'))
        <div class="col-lg-3 col-xl-2">
            <div class="file-man-box"><a href="" wire:click="delete" class="file-close"><i
                        class="fa fa-times-circle"></i></a>
                <div class="file-img-box">
                    <img src="https://coderthemes.com/highdmin/layouts/assets/images/file_icons/pdf.svg" alt="icon">
                </div>
                <a href="{{ asset('files/doc/offre_' . $file . '.pdf') }}" class="file-download">
                    <i class="fa fa-download"></i>
                </a>
                <div class="file-man-title">
                    <h5 class="mb-0 text-overflow">{{ 'offre_' . $file . '.pdf' }}</h5>
                </div>
            </div>
        </div>
    @else
        {{-- Ajouter des images Dropezone --}}
        <p>
            <strong>Ajouter des images</strong> en glissant deposer les images ou l'image sur cette
            expace.<br>
            la photo doit avoir moin de <strong>2 Mb</strong>
        </p>

        <form action="{{ route('files.upload', ['article' => 'offre_' . $file]) }}" class="dropzone" id="dropzoneForm">
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
    @endif


    <script src="{{ asset('js/plugins/dropzone/dropzone.js') }}"></script>
    <!-- Script -->
    <script>
        var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone(".dropzone", {
            maxFilesize: 6, // 3 mb
            acceptedFiles: ".jpeg,.jpg,.png,.pdf",
        });
        myDropzone.on("sending", function(file, xhr, formData) {
            formData.append("_token", CSRF_TOKEN);
        });

    </script>

</div>
