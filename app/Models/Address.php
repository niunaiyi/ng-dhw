<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

class Address extends Model
{
    use HasAdvancedFilter;
    use SoftDeletes;
    use HasFactory;
    use NodeTrait;

    public $table = 'addresses';

    protected $orderable = [
        'id',
        'name',
        'fullname',
        'type.desc',
    ];

    protected $filterable = [
        'id',
        'name',
        'fullname',
        'type.desc',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'fullname',
        'type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function type()
    {
        return $this->belongsTo(Dict::class, 'type_value', 'value')
            ->withDefault([
                'type' => 'dzlx',
            ]);
    }

    public function parent()
    {
        return $this->belongsTo(Address::class, 'parent_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
