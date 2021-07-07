<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class customer extends Model
{


  use SoftDeletes;
 

    protected $fillable = [
        'first name',
        'last name',
        'email',
        'phone number',
        'state',
        'country',
      ];
      protected $dates=['deleted_at'];
}
