<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $fillable = [
        'first name',
        'last name',
        'email',
        'phone number',
        'state',
        'country',
      ];
}
