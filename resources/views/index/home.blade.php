@extends('layouts/main',['current_page' => 'home'])

@section('content')

    <main>
        <h1>
            Better movie database
        </h1>
        <div class="main-container">
            <section class="latest">

                
                
                <h2>
                    Latest releases
                </h2>
                @foreach($latestReleases as $release)
                
                <h3>
                    <a href="#">{{ $release->name }}</a>
                </h3>
    <p>Type: {{ $release->movie_type->slug }} ({{ $release->year }}) Rating: {{ $release->rating }} ({{ $release->votes_nr }} votes)</p>
    
    @endforeach
</section>
    
       <section class="top">
            <h2>
                Top rated titles
            </h2>

            @foreach($topTitles as $title)

                <h3>
                    <a href="#">{{ $title->name }}</a>
                </h3>
                <p>Rating: {{ $title->rating }} ({{ $title->votes_nr }} votes) Type: {{ $title->movie_type->slug }} ({{$title->year}})</p>

            @endforeach
        </div>
       </section>
    </main>


@endsection