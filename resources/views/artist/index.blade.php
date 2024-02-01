@extends ('app.base')
@section('title', 'Argo Second Title')

@section ('content')

          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($artists as $artist)
                <tr>
                  <td>{{ $artist-> id }} </td>
                  <td>{{ $artist-> name }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            
          </div> 

@endsection