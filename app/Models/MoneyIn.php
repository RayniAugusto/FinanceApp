<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyIn extends Model
{
    use HasFactory;
    protected $table = 'money_in';
    protected $primaryKEy = 'id';
    public $fillable = [
        'date_in',
        'amount',
        'category_id',
        'description',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}


