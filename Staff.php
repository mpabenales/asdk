<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    public function facultyUser()
    {
        return $this->belongsTo(User::class);
    }

    public function staffDepartment()
    {
        return $this->belongsTo(Department::class);
    }
}
