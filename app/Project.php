<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded=[];// Siempre y cuando no se envie Model::create(request()->all);

    public function getRouteKeyName()
   {
    return 'url';    
   }
}
