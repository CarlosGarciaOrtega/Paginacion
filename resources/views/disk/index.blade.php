@extends ('app.base')
@section('title', 'Argo disk list')

@section ('content')

          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Title</th>
                  <th scope="col">Artist</th>
                  <th scope="col">Year</th>
                  <th scope="col">Cover</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($disks as $disk)
                <tr>
                  <td>{{ $disk-> id }} </td>
                  <td>{{ $disk-> title }}</td>
                  <td>{{ $disk-> idartist }} {{$disk->artist->name}}</td>
                  <td>{{ $disk-> year }}</td>
                 
                  <td><img src="data:image/jpeg;base64,{{ $disk->cover }}"></td>
              
                  
                </tr>
                @endforeach
              </tbody>
            </table>
             <a class="btn-info btn" href="{{ url ('disk/create') }}">Create disk</a>
          </div> 

@endsection