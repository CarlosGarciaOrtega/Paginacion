<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use Illuminate\Support\Facades\DB;

class PaginateArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rows = $request->rows != null && $request->rows >=0  ? $request->rows: 3;
        $orderBy = $request->orderBy != null ? $request->orderBy : 'id'; 
        $orderType = $request->orderType != null ? $request->orderType : 'asc'; 
        
        //$paginas = $request->rows != null || $request->rows <=0  ? $request->rows: 3; 
        $q=$request->q;
        
        if($q ==null){
            $artist = Artist::orderBy($orderBy,$orderType)->orderBy('name','desc')->paginate($rows);
        }else{
            $artist = Artist::where('name','like','%'.$q.'%')
                                ->orwhere('id','=',$q)
                                ->orwhere('idargo','=',$q)
                                ->orwhere('idotro','=',$q)
                                ->orderBy($orderBy,$orderType)
                                ->orderBy('name','desc')
                                ->paginate($rows);
                            }
        
        
        return view('paginateArtist',
                    ['artists'=>$artist,
                        'rows'=>$rows,
                        'orderBy'=>$orderBy,
                        'orderType'=>$orderType,
                        'q'=>$q
                    ]);
    }

    public function index2(Request $request){
         
         
         $rows = $request->rows != null && $request->rows >=0  ? $request->rows: 3; 
         $page = $request->page != null && $request->page >=0 ? $request->page: 1;
         
         $calculo = $rows*($page-1);
         
         $sql="select * from artist where id = 0 limit $calculo,$rows";
         
         $artist = DB::select($sql);
         $totalArtist = count($artist);
         
         $pages = $totalArtist%$rows == 0 ? intdiv($totalArtist,$rows):intdiv($totalArtist,$rows)+1;
         
         dd([
                        'artists'=>$artist,
                        'page'=>$page,
                        'pages'=>$pages,
                        'rows'=> $rows,
                        
                    ]);
         
         
        return view('paginateArtist2',
                    [
                        'artists'=>$artist,
                        'page'=>$page,
                        'pages'=>$pages,
                        'rows'=> $rows,
                    ]);
    
    }
    
    
    
    
    
    
    public function create()
    {}
       

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
