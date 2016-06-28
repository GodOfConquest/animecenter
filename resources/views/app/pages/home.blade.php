@extends('app.layouts.main')

@section('content')
    <div class="row home">
        <div class="col-xs-12 col-md-9">
            <h2 class="heading h4 text-dark-purple">New Anime Episodes</h2>
            <div class="episodes">
                @foreach ($episodes as $episode)
                    <article class="episode-item container-shadow">
                        <a class="episodes__holder" href="{{ url($episode->anime->slug.'/'.$episode->slug.'/'.$episode->mirror->translation) }}">
                            <img src="{{ asset($episode->photo) }}" class="img-fluid" alt="{{ $episode->title }}"
                                 height="150" width="auto">
                            <h1 class="episodes__title h5">{{ $episode->shortTitle }}</h1>
                            <span class="episode__number h5">Episode {{ $episode->number }}</span>
                            <span class="episode__details bg-purple h6">subbed</span>
                            <span class="episode__details bg-orange h6">HD</span>
                            <span class="episode__time h6">20 minutes ago</span>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-md-9">
            <h2 class="heading h4 text-dark-purple">Anime This Season</h2>
            <div class="anime">
                @foreach ($animes as $anime)
                    <article class="anime-item container-shadow">
                        <a class="anime__holder thumbnail" href="{{ url($anime->slug) }}">
                            <img src="{{ asset($anime->photo) }}" class="img-anime img-fluid" alt="{{ $anime->title }}" width="100%">
                            <div class="caption">
                                <h3 class="anime__title">
                                    {{ $anime->shortTitle }}
                                </h3>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
@endsection
