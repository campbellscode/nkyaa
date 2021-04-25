<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    // Needed to create and update db records from the admin panel.
    //protected $fillable = ['name','type', 'day', 'time', 'address', 'city', 'state', 'zip']; 
    //protected $table = 'meetings';
    protected $guarded = [];
}
