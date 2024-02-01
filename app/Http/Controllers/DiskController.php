<?php

namespace App\Http\Controllers;

use App\Models\disk;
use App\Models\Artist;
use Illuminate\Http\Request;

class DiskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disk = Disk::all();
        return view('disk.index',['disks'=>$disk]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::pluck('name','id');
       return view('disk.create',['artists'=>$artists]); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
         
        try{

                $disk = new Disk($request->all());
                 if($request->hasFile('file') && $request->file('file')->isValid()) {
                 $archivo = $request->file('file');
                 $path = $archivo->getRealPath();
                 $imagen = file_get_contents($path);
                 $disk->imagen = base64_encode($imagen);
                }
                $disk->save();
             
             return redirect('disk');//no hace falta poner url('movie/create') ya que lo hace redirect
        }catch(\Exception $e){
             //4º Si no lo he guardado volver para tras con los datoas rellenos
            return back();//volvemos para atras con los datos que me llegan 
        }
         return view('disk.create');
         
         
         
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function show(disk $disk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function edit(disk $disk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, disk $disk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\disk  $disk
     * @return \Illuminate\Http\Response
     */
    public function destroy(disk $disk)
    {
        //
    }
    
    
    
    public fuction view(){
        return response()->file(storage_app('app').'/public/navidad.jpg');
    }
}
