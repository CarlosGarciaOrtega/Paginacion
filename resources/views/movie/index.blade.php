@extends ('app.base')
@section('title', 'Argo Second Title')

@section ('content')

          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Director</th>
                  <th scope="col">Year</th>
                  <th scope="col">Genre</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($movies as $movie)
                <tr>
                  <td>{{ $movie-> id }} </td>
                  <td>{{ $movie-> title }}</td>
                  <td>{{ $movie-> director }}</td>
                  <td>{{ $movie-> year }}</td>
                  <td>{{ $movie-> genre }}</td>
                  <td><a href="{{url('movie/' . $movie->id) }}">Show Movie</a></td>
                  <td><a href="{{url('movie/' . $movie->id . '/edit')}}">Edit Movie</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
            
            <a class="btn-info btn" href="{{ url ('movie/create') }}">Create Movie</a>
            
          </div> 

@endsection