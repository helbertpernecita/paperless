<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Admin\Position;
use App\Models\Admin\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    
    protected $table = 'employees';

    protected $fillable = [
        'name',
        'department_id',
        'position_id',
        'remarks',
        'active',
        'updated_by',
        'created_by',
    ];

    public function createdBy(){
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function department(){
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function position(){
        return $this->belongsTo(Position::class, 'position_id');
    }

}
