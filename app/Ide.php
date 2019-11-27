<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ide extends Model
{
    protected $fillable = [
        'nama', 'Deskripsi', 'user_is', 'status_id', 'image',
    ];
}
