
@extends('layout.default')

@section('content')

  <h1 class="title">{{ Config::get('app.name') }}</h1>

  @foreach ($registries as $registry)

    <div class="card">
      <div class="card-content">

        <p class="title">
          <a href="{{ route('registry.permalink', [$registry->id, $registry->randomQuoteLink()] ) }}">{{ $registry->title }}</a>
        </p>
        <p class="subtitle">
          {{ $registry->description }}
        </p>
      </div>

    </div>
  @endforeach

  <a href="{{ route('registry.create') }}" class="button is-link is-fullwidth">Create a new registry</a>

@endsection
