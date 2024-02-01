@extends('app.base')
@section('title', 'Argo Create disk')

@section('content')

<form action="{{ url('disk') }}" method="post">

    <!-- Solución de error por CSRF -->
    <!--<input type="hidden" name="_method" value="post">-->
    <!--<input type="hidden" name="_token" value="{{ csrf_token() }}">-->
    @csrf

    <!-- Inputs del formulario -->

    <div class="mb-3">

        <label for="title" class="form-label">Disk title</label>

        <input type="text" class="form-control" id="title" name="title" maxlength="60" required value="{{old('title')}}">

    </div>

    <div class="mb-3">

        <label for="idartist" class="form-label">Artists</label>
        <input type="text" class="form-control" id="idartist" name="idartist" maxlength="60" required value="{{old('Artists')}}">

    </div>

    <div class="mb-3">

        <label for="year" class="form-label">Disk year</label>

        <input type="number" class="form-control" id="year" name="year" step="1" min="1" max="9999" required value="{{old('year')}}">

    </div>
    <div class="mb-3">

        <label for="cover" class="form-label">Cover</label>

        <input type="file" class="form-control" id="cover" name="cover" ">

    </div>
    <button type="submit" class="btn btn-success">Submit</button>

</form>
@endsection