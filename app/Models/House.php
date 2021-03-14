<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $guarded = [];

    //protected $casts = [ 'busline' => 'array' ];

    public function setBuslineAttribute($value)
    {
        $this->attributes['busline'] = $value;
    }
    // public function getBuslineAttribute()
    // {
    //     return 1 ? 'YES' : 'NO';
    // }
}
