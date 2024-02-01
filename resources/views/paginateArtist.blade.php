@extends ('app.base')
@section('title', 'Argo Second Title')

@section ('content')
        <div class="d-flex">
            <form>
              <input type="hidden" name="orderBy" value="{{$orderBy}}"/>
              <input type="hidden" name="orderType" value="{{$orderType}}"/>
              <input type="hidden" name="q" value="{{$q}}"/>
               <select name="rows" id="">
                    <option {{ $rows==3 ? "selected" :" " }} value="3">3</option>
                    <option {{ $rows==10 ? "selected" :" " }} value="10">10</option>
                    <option {{ $rows==25 ? "selected" :" " }} value="25">25</option>
                    <option {{ $rows==100 ? "selected" :" " }} value="100">100</option>
                </select>
                <button type="subtmit">View</button>
            </form>
            <form>
              <input type="search" name="q" value="{{$q}}"/>
                 <input type="hidden" name="orderBy" value="{{$orderBy}}"/>
                <input type="hidden" name="orderType" value="{{$orderType}}"/>
                <input type="hidden" name="rows" value="{{$rows}}"/>
                <button type="subtmit">Filter</button>
            </form>
            
        </div>

          <div class="table-responsive small">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th scope="col">#
                    <a href="?rows={{$rows}}&orderBy=id&orderType=desc" >
                      <svg style="height:20px;width:20px;"><use xlink:href="#down" /></svg>
                    </a>
                    <a href="?rows={{$rows}}&orderBy=id&orderType=asc" >
                      <svg  style="height:20px;width:20px;" ><use xlink:href="#up" /></svg>
                    </a>
                  </th>
                  
                  <th scope="col">Name
                    <a href="?rows={{$rows}}&orderBy=name&orderType=desc" >
                      <svg style="height:20px;width:20px;"><use xlink:href="#down" /></svg>
                    </a>
                    <a href="?rows={{$rows}}&orderBy=name&orderType=asc" >
                      <svg  style="height:20px;width:20px;" ><use xlink:href="#up" /></svg>
                    </a>
                  </th>
                  <th scope="col">Idargo
                  <a href="?rows={{$rows}}&orderBy=idargo&orderType=desc" >
                      <svg style="height:20px;width:20px;"><use xlink:href="#down" /></svg>
                    </a>
                    <a href="?rows={{$rows}}&orderBy=idargo&orderType=asc" >
                      <svg  style="height:20px;width:20px;" ><use xlink:href="#up" /></svg>
                    </a>
                  </th>
                  <th scope="col">Idotro
                   <a href="?rows={{$rows}}&orderBy=idotro&orderType=desc" >
                      <svg style="height:20px;width:20px;"><use xlink:href="#down" /></svg>
                    </a>
                    <a href="?rows={{$rows}}&orderBy=idotro&orderType=asc" >
                      <svg  style="height:20px;width:20px;" ><use xlink:href="#up" /></svg>
                    </a>
                  </th>
                </tr>
              </thead>
              <tbody>
                  @foreach($artists as $artist)
                <tr>
                  <td>{{ $artist-> id }} </td>
                  <td>{{ $artist-> name }}</td>
                  <td>{{ $artist-> idargo }} </td>
                  <td>{{ $artist-> idotro }}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <div>
                {{$artists->appends([
                        'rows' => $rows,
                        'orderBy'=>$orderBy,
                        'orderType'=>$orderType,
                        'q'=>$q
                        ])->onEachSide(2)->links()}}
            </div>
            
          </div> 

@endsection