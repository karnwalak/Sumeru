<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hr_department extends Model
{
    use HasFactory;
    protected $table = "hr_departments";
    public $timestamps = false;
}
