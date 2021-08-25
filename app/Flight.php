<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Flight extends Model
{
    use Translatable;
    protected $translatable = ['name','description1','description2','description3'];
}
