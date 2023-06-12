@extends('layouts.app')

@section('title-page')
Laravel Comics | Movies
@endsection

@section('content')

<!-- start: print the movies -->
<div class=" width-80 just-cont-evenly flex flex-dir-row margin-auto flex-wrap">
    @foreach( $movies as $elem )
    <div class="card mb-3 mr-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title  text-center">
                {{ $elem['title'] }}
            </h5>
            <h6 class="card-subtitle mb-2 text-muted  text-center">
                Date: {{ $elem['date'] }}</h6>
            <p class="card-text text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi excepturi suscipit in voluptatibus? Hic
                veniam eos voluptas vitae ex quas quibusdam nemo, omnis corrupti? Rerum minima fugiat voluptates sit
                quae.
            </p>
            <h6 class="card-subtitle mb-2 text-muted  text-center">
                Original title: {{ $elem['original_title'] }}
            </h6>
            <p class=" text-center">
                Vote: {{ $elem['vote'] }}
            </p>
        </div>
    </div>
    @endforeach
</div>
<!-- end: print movies -->

@endsection