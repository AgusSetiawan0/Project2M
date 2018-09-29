@extends('layouts.app')

@section('content')
<div class="container">

    @if (session('msg'))
      <div class="alert alert-succes">
        <p> {{ session('msg')}}</p>
      </div>
    @endif

    <div class="row">
      @foreach ($projects as $project)
      <div class="col md-4">
        <div class="thumbnails">
          <div class="caption">{{ $project->judul }}</div>
          <p><a href="/projects/{{ $project->slug }}" class="btn btn-primary">Lihat Project</a></p>
        </div>
      </div>
      @endforeach
    </div>

</div>
@endsection
