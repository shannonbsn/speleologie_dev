<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homeform extends Model
{
    use HasFactory;
    protected $fillable = ['email','activite','site','date','titre','description','avis','reception_email'];
    protected $table = 'homeforms';
}
