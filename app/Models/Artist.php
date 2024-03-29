<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory; 
    
    public $timestamps= false;
    protected $table = 'artist';
    protected $fillable = ['name'];
   
   public function artist(){
       return $this->hasMany('App\Models\Disk' , 'idartist');
   }
}
