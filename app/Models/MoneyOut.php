<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyOut extends Model
{
    use HasFactory;
    protected $table = 'money_out';
    protected $primaryKEy = 'id';
    public $fillable = [
        'date_out',
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
