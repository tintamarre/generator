
@extends('layout.default')
@section('navbar')
  <a href="{{ route('registry.edit', [$registry->id]) }}" class="navbar-item">Edit</a>

@endsection

@section('title')

  <h1>Create term</h1>

@endsection

@section('content')
    <form class="" action="{{ route('registry.terms.store', [$registry->id]) }}" method="post">
    {{ csrf_field() }}

    <input class="input" type="text" name="name" value="" placeholder="Text input">

    <input class="input" type="text" name="registry_id" value="{{ $registry->id }}" hidden>


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
      Insert
    </button>
  </form>

@endsection
