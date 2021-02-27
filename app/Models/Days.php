<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Days extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    // protected $table = 'days';
    // protected $primaryKey = 'id';
    // public $timestamps = true;
    protected $guarded = [];

    // Creating relationship to meetings model/table.
    //public function meetings()
    // {
    //     return $this->belongsToMany(Meeting::class);
        
    // }

    // public function meetings()
    // {
    //     return $this->belongsToMany('App\Models\Meeting');//, 'days_meeting');
    // }
}


