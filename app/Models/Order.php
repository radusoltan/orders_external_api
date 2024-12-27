<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
// pending, shipped, delivered, canceled
    const STATUS_PENDING = 'pending';
    const STATUS_SHIPPED = 'shipped';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_DELIVERED = 'delivered';
    protected $fillable = ['order_number', 'status', 'total_amount'];

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
