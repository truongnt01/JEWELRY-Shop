<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'total',
        'ship',
        'customer_name',
        'customer_phone',
        'customer_email',
        'customer_address',
        'note',
        'payment',
        'user_id'
    ];

    public function getWithPaginateBy($userId){
        return $this->whereUserId($userId)->latest('id')->paginate(10);
    }
}
