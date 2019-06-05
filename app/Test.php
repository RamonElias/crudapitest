<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
   protected $fillable = [
      'ab1', 'ab2', 'ab3', 'ab4', 'ab5',
   ];

   protected $hidden = [
      // 'created_at', 'updated_at',
   ];
}
