<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['id', 'name', 'birdthday', 'description'];
    protected $hidden   = ['created_at', 'updated_at'];
}