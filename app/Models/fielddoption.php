<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fielddoption extends Model
{

    protected $table = 'fielddoptions';

    protected $fillable = [
        'name',
    ];


    use HasFactory;
}
