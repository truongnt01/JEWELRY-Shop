<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'value',
        'expery_data'
    ];

    public function getExperyDataAttribute()
    {
        return Carbon::parse($this->attributes['expery_data'])->format('Y-m-d');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'coupon_user');
    }

    public function firstWithExperyDate($name, $userId){
        return $this->whereName($name)->whereDoesntHave('users', fn($item) => $item->where('users.id', $userId))->whereDate('expery_data', '>=', Carbon::now()->first());
    }
}
