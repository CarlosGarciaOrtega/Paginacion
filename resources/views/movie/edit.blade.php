@extends('app.base')
@section('title', 'Argo Edit Title')

@section('content')
<form action="{{ url('movie/' . $movie->id) }}" method="post">
    <!--indicamos que el metodo del formulario es put-->
    @method('put') 
    @csrf

    <!-- Inputs del formulario -->

    <div class="mb-3">

        <label for="title" class="form-label">Movie title</label>

        <input type="text" class="form-control" id="title" name="title" maxlength="60" required value="{{old('title',$movie->title)}}">

    </div>

    <div class="mb-3">

        <label for="director" class="form-label">Movie director</label>

        <input type="text" class="form-control" id="director" name="director" maxlength="110" required value="{{old('director',$movie->director)}}">

    </div>

    <div class="mb-3">

        <label for="year" class="form-label">Movie year</label>

        <input type="number" class="form-control" id="year" name="year" step="1" min="1" max="9999" required value="{{old('year',$movie->year)}}">

    </div>

    <div class="mb-3">

        <label for="genre" class="form-label">Movie genre</label>

        <input type="text" class="form-control" id="genre" name="genre" maxlength="50" value="{{old('genre',$movie->genre)}}">

    </div>

    <button type="submit" class="btn btn-success">Submit</button>

</form>
@endsection