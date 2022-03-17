<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;

class Customer extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;


    public $table = 'customers';

    protected $orderable = [
        'id',
        'nickname',
        'realname',
        'phonenumber',
        'address.fullname',
        'score',
        'unionid',
        'cardno',
        'type.desc',
    ];

    protected $filterable = [
        'id',
        'nickname',
        'realname',
        'phonenumber',
        'address.fullname',
        'unionid',
        'cardno',
        'type.desc',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'nickname',
        'realname',
        'phonenumber',
        'address',
        'score',
        'type.desc',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function type()
    {
        return $this->belongsTo(Dict::class, 'type_value', 'value')
            ->withDefault([
                'type' => 'hylx',
            ]);
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }
}
