<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
      'email',
      'phone',
      'room',
      'arrival',
      'departure',
      'adult',
      'children',
      'message',
      'status'
    ];

    public static function store(array $data)
    {
      return self::create($data);
    }
}
