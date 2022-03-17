<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drop extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use HasFactory;

    public $table = 'drops';

    protected $orderable = [
        'id',
        'customer.phonenumber',
        'address.fullname',
        'device.name',
        'device.uuid',
        'type.name',
    ];

    protected $filterable = [
        'id',
        'customer.phonenumber',
        'address.fullname',
        'device.name',
        'device.uuid',
        'type.name',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'customer.phonenumber',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function device()
    {
        return $this->belongsTo(Device::class, 'device_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(Garbage::class, 'ljlx_value', 'value');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'id');
    }

    public function address()
    {
        return $this->hasOneThrough(Address::class, Customer::class, 'id', 'id', 'customer_id', 'address_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
