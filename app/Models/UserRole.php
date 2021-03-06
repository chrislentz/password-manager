<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model {

	protected $table = 'users_roles';

    public $timestamps = false;

    public function users() {
        return $this->hasMany('App\Models\User');
    }

}
