<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    use HasFactory;
    protected $primaryKey ='registerUser_id';
    protected $table = 'registerusers';
    protected $guarded = [];
}
