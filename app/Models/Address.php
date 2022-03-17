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

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public static function updateFullname($id)
    {
        $addresses = Address::descendantsAndSelf($id);
        Address::chunk(1000, function ($addresses) {
            foreach ($addresses as $address) {
                $name = '';
                $ancestors = $address->ancestors;
                foreach ($ancestors as $ancestor) {
                    $name = $name . $ancestor->name;
                }
                $address->fullname = $name . $address->name;
                echo $address->fullname . PHP_EOL;
                $address->save();
            }
        });
    }

    public static function updateAllFullname()
    {
        Address::where('fullname', null)->chunk(1000, function ($addresses) use ($count, $i) {
            foreach ($addresses as $address) {
                $name = '';
                $ancestors = $address->ancestors;
                foreach ($ancestors as $ancestor) {
                    $name = $name . $ancestor->name;
                }
                $address->fullname = $name . $address->name;
                echo $address->fullname . PHP_EOL;
                $address->save();
            }
        });
    }

    public static function boot()
    {
        parent::boot();

        self::created(function ($model) {
            Address::updateFullname($model->id);
        });

        self::updated(function ($model) {
            if ($model->isDirty('name')) {
                Address::updateFullname($model->id);
            }
        });
    }

}
