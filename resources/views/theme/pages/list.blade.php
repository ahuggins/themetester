<h3>Pages</h3>
@foreach ($files as $file)
    <div>
        <a href="{{ url('themes/' . basename($file->getPath()) . '/' . str_replace('.blade.php', '', $file->getFilename())) }}">
            {{ $file->getFilename() }}
        </a>
    </div>
@endforeach
