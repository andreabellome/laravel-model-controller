@extends('layouts.app')

@section('title-page')
Laravel Comics | Movies
@endsection

@section('content')

<!-- start: print the movies -->


<div class="debug width-80 just-cont-evenly flex flex-dir-row margin-auto flex-wrap">
    @foreach( $movies as $elem )
    <div class="card mb-3 mr-5" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                {{ $elem['title'] }}
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
    @endforeach
</div>



<!-- <div class="debug">

    {{ $elem['title'] }}

</div> -->


<!-- end: print movies -->

@endsection