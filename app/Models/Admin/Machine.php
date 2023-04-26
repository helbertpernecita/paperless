<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;

    protected $table = 'machines';

    protected $fillable = [
        'code',
        'name',
        'remarks',
        'active',
        'created_by',
        'updated_by',
    ];

    public function createdBy(){
        return $this->belongsTo(User::class, 'updated_by');
    }
}
