@extends ('app.base')
@section('title', 'Argo Second Title')

@section ('content')
        <div class="">
            <form>
               <select name="rows" id="">
                    <option {{ $rows==3 ? "selected" :" " }} value="3">3</option>
                    <option {{ $rows==10 ? "selected" :" " }} value="10">10</option>
                    <option {{  $rows==25 ? "selected" :" " }} value="25">25</option>
                    <option {{  $rows==100 ? "selected" :" " }} value="100">100</option>
                </select>
                <button type="subtmit">View</button>
            </form>
            
        </div>

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
           <div>
             <ul class="pagination">
                <li class="page-item {{$page==1 ? "disabled":""}}"  aria-label="« Previous">
                   
                    <a class="page-link" href="{{url('paginate2?page='.($page-1).'&rows='.$rows)}}" 
                        rel="next" aria-label="Next »">‹</a>
                </li>
                
                @if($page > 1)
                <li class="page-item"><a class="page-link" href="{{url('paginate2?rows='.$rows.'&page=1')}}">1</a></li>
                @endif
                
                @if($page > 2)
                <li class="page-item"><a class="page-link" href="{{url('paginate2?rows='.$rows.'&page=2')}}">2</a></li>
                @endif
                
                @if($page >4)
                <li class="page-item"><a class="page-link" href="{{url('paginate2?rows='.$rows.'&page='.$page-2)}}">{{$page-2}}</a></li>
                @endif
                
                @if($page >=4)
                <li class="page-item"><a class="page-link" href="{{url('paginate2?rows='.$rows.'&page='.$page-1)}}">{{$page-1}}</a></li>
                @endif
                
                <li class="page-item"><a class="page-link active">{{$page}}</a></li>
                
                @if($page < $pages-2)
                    <li class="page-item"><a class="page-link" href="{{url('paginate2?rows='.$rows.'&page='.$page+1)}}">{{$page+1}}</a></li>
                @endif
                 @if($page+1 < $pages-2)
                  <li class="page-item"><a class="page-link" href="{{url('paginate2?rows='.$rows.'&page='.$page+2)}}">{{$page+2}}</a></li>
                 @endif
                @if($page < $pages-1)
                <li class="page-item"><a class="page-link" href="{{url('paginate2?rows='.$rows.'&page='.$pages-1)}}">{{$pages-1}}</a></li>
                @endif
                
                @if($page < $pages)
                    <li class="page-item"><a class="page-link" href="{{url('paginate2?rows='.$rows.'&page='.$pages)}}">{{$pages}}</a></li>
                @endif
                
                <li class="page-item {{$page==$pages ? "disabled":""}}">
                    <a class="page-link" href="{{url('paginate2?page='.($page+1).'&rows='.$rows)}}" 
                        rel="next" aria-label="Next »">›</a>
                </li>
              </ul>
           </div>
            
          </div> 

@endsection