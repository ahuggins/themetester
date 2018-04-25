@foreach ($files as $file)
    <div>
        <a href="{{ url(basename($file->getPath()) . '/' . str_replace('.blade.php', '', $file->getFilename())) }}">
            {{ $file->getFilename() }}
        </a>
    </div>
@endforeach
