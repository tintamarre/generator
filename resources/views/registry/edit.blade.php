
@extends('layout.default')
@section('navbar')
  <a href="{{ route('registry.edit', [$registry->id]) }}" class="navbar-item">Edit</a>

@endsection

@section('title')
  <div class="header">

    <h1 class="title">{{ $registry->title }} <br>
    </h1>
    <h2 class="subtitle">
      <strong>Max combination<strong> {{ $registry->MaxCombination() }}
      </h2>
      <div class="controls">
        <a href="{{ route('registry.terms.create', [$registry->id]) }}" class="button is-success">
          New term
        </a>
      </div>
    </div>

  @endsection

  @section('content')

    <div class="columns is-mobile">
      @for ($order=1; $order <= $registry->terms->max('order'); $order++)
        <div class="column">

          <div class="level-item has-text-centered">
            <div>
              <p class="heading">
                items: {{ $registry->terms()->whereOrder($order)->get()->count() }}
              </p>
              <p class="title">
                {{ $order }}

              </p>
            </div>
          </div>

          <table class="table is-narrow is-hoverable">
            @foreach ($registry->terms()->whereOrder($order)->inRandomOrder()->get() as $term)
              <tr>
                <td>
                  <a href="{{ route('registry.terms.edit', [$registry->id, $term->id]) }}" class="is-small">
                    <i class="far fa-edit"></i>
                  </a>
                </td>
                <td>
                  {{ $term->name }} {{ $term->gender ?? '' }}
                </td>            
            </tr>
          @endforeach
        </table>
      </div>

    @endfor
  </div>






@endsection
