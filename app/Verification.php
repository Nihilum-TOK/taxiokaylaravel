<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verification extends Model
{
    protected $table = 'verifications';

    protected $guarded = [
        'id', 'approved', 'created_at', 'updated_at',
    ];
}
