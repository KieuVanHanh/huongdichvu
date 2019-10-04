<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class branch extends Model {

    protected $table = "branch";

    public function room() {
        return $this->hasMany('app/room', 'branchID', 'id');
    }

    public function elderly() {
        return $this->hasMany('app/elderly', 'branchID', 'id');
    }

    public function employee() {
        return $this->hasMany('app/employee', 'branchID', 'id');
    }

    public function guardians() {
        return $this->hasMany('app/guardians', 'branchID', 'id');
    }

}
