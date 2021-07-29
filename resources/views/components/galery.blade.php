<div>
    <h4>Quelques images relatives à l'article</h4>
    {{-- Aficher les images des l'article --}}
    @foreach ($scandir as $fichier)
        @if (preg_match(" #\.(jpg|jpeg|png|gif|bmp|tif)$#", strtolower($fichier)))
            <a href="#{{ $fichier }}"><img src=" {{ asset($path . '/' . $fichier) }}" class="img-thumbnail m-1"
                    width="100" height="100"></a>
        @elseif (is_dir($fichier) and $fichier != '.' and $fichier != '..')
            {{ $fichier }}<br />
        @elseif (substr(strtolower($fichier), -4, 4) == '.php')
            {{ $fichier }}<br />
        @endif
    @endforeach
    <br>

    @foreach ($scandir as $fichier)
        @if (preg_match(" #\.(jpg|jpeg|png|gif|bmp|tif)$#", strtolower($fichier)))
            <a href="#_1" class="lightbox trans" id="{{ $fichier }}"><img
                    src=" {{ asset($path . '/' . $fichier) }}"></a>
        @endif
    @endforeach
</div>
