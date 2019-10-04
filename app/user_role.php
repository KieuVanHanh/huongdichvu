<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
        protected $table = "user_role";
        public function elderly()
        {
            return $this->hasMany('app/elder','user_roleID','id');
        }
            public function guardians()
        {
            return $this->hasMany('app/guardians','user_roleID','id');
        }
        public function employee()
        {
            return $this->hasMany('app/employee','user_roleID','id');
        }
        
}
