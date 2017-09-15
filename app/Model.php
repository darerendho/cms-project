<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //
    protected $guarded = [];
    //$fillable ensures that only the names in the array are place into Database
    //$guarded does not allow those inputs in your array from post request to Database
}
