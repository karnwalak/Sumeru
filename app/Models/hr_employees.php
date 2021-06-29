<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hr_employees extends Model
{
    use HasFactory;
    protected $table = "hr_employees";
    public $timestamps = false;
}
