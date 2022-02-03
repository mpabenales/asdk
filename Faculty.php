<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    public function facultyUser()
    {
        return $this->belongsTo(User::class);
    }

    public function facultyDepartment()
    {
        return $this->belongsTo(Department::class);
    }
}
