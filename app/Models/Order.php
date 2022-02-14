<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'order';

    protected $guarded = ['order_id'];
    
    public function EBook(){
        return $this->belongsTo(EBook::class, 'ebook_id', 'ebook_id');
    }
}
