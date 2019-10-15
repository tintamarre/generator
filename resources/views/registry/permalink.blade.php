
@extends('layout.default')

@section('navbar')
  <a class="navbar-item" href="{{ route('registry.edit', [$registry->id]) }}">
  Manage Registry
  </a>
@endsection

@section('content')

  <div class="card">
    <div class="card-content">
      <p class="subtitle">
        {{ $registry->title }}
      </p>
      <p class="title">
        {!! $quote !!}
      </p>

    </div>
    <footer class="card-footer">
      <p class="card-footer-item">
        <span>
          <a href="{{ route('registry.permalink', [$registry->id, $permalink ]) }}">
            <i class="fas fa-link"></i>
            <i>permalink</i>
          </a>
        </span>
      </p>
      <p class="card-footer-item">
        <span>
          <a href="{{ route('registry.permalink', [$registry->id, $registry->randomQuoteLink() ]) }}">
            <i class="fas fa-sync"></i>
            <i>Generate a new quote</i>
          </a>
        </span>
      </p>
    </footer>
  </div>


@endsection
