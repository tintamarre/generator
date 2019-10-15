
@extends('layout.default')
@section('navbar')
  <a href="{{ route('registry.edit', [$term->registry_id]) }}" class="navbar-item">Edit</a>

@endsection

@section('title')

  <h1>{{ $term->name }}</h1>

@endsection

@section('content')
    <form class="" action="{{ route('registry.terms.update', [$term->registry_id, $term->id]) }}" method="post">
    {{ csrf_field() }}

    <input class="input" type="text" name="name" value="{{ $term->name }}" placeholder="Text input">
    <div class="field">
      <label class="label">Gender</label>
      <div class="control">
        <div class="select">
          <select name="gender">
              <option value="F">F</option>
              <option value="M">M</option>
              <option value="null" default>null</option>
          </select>
        </div>
      </div>
    </div>


    <button type="submit" name="button" class="button is-link">
      Update
    </button>
  </form>

@endsection
