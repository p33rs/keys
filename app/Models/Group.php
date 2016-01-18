<?php

namespace KeyManager\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function users()
    {
        return $this->belongsToMany('User', 'memberships', 'userid', 'groupid');
    }
}
