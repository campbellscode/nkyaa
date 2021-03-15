<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $guarded = [];

    //protected $casts = [ 'state' => 'json' ];

    // Needed to show Men's and Women's, the value not the key, of the array.
    public function setTypeAttribute($value)
    {
        $this->attributes['type'] = $value;
    }

    // Needed to show KY and OH, the value not the key, of the array.
    public function setStateAttribute($value)
    {
        $this->attributes['state'] = $value;
    }

    // Needed to show Yes or No, the value not the key, of the array.
    public function setBuslineAttribute($value)
    {
        $this->attributes['busline'] = $value;
    }
    // public function getBuslineAttribute()
    // {
    //     return 1 ? 'YES' : 'NO';
    // }
}
