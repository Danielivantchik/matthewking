<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    protected $table = 'invites';

    protected $fillable = [
        'name', 'email', 'phone', 'title', 'description'
    ];
}
