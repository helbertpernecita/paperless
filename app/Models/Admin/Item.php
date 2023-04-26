<?php

namespace App\Models\Admin;

use App\Models\User;
use App\Models\Admin\Unit;
use App\Models\Admin\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'name',
        'unit_id',
        'category_id',
        'remarks',
        'item_img',
        'active',
        'purchase_price',
        'selling_price',
        'stock_available',
        'stock_minimum',
        'fsn',
        'code',
        'updated_by',
        'created_by',
    ];

    public function createdBy(){
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

}
