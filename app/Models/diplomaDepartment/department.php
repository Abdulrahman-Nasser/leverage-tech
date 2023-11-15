<?php

namespace App\Models\diplomaDepartment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $table = 'diploma-departments';
    protected $fillable = ['department_name'];
}
