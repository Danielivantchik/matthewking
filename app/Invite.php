<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invite extends Model
{
    use SoftDeletes;

    protected $table = 'invites';

    protected $fillable = [
        'name', 'email', 'phone', 'description'
    ];
}
