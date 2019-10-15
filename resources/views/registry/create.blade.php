
@extends('layout.default')

@section('navbar')

@endsection

@section('content')

<form class="" action="{{ route('registry.store') }}" method="post">
{{ csrf_field() }}
  <div class="field">
    <label class="label">Title of registry</label>
    <div class="control">
      <input class="input" type="text" name="title" placeholder="Text input">
    </div>
  </div>

  <div class="field">
    <label class="label">Number of fields</label>
    <div class="control">
      <div class="select">
        <select name="max_order">
          @for ($i=1; $i < 13; $i++)
            <option value={{ $i }}>{{ $i }}</option>
          @endfor
        </select>
      </div>
    </div>
  </div>
  <button type="submit" name="button" class="button">
    Create
  </button>

</form>

@endsection
