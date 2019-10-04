<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relationship extends Model
{
    protected $table = "relationship";
     public function guardians()
        {
            return $this->hasMany('app/guardians','relationshipID','id');
        }
}
