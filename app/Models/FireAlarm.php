<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;

/**
 * Class FireAlarm
 *
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 *
 * @method static \Illuminate\Database\Eloquent\Builder|FireAlarm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FireAlarm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FireAlarm query()
 * @method static Builder|FireAlarm filters()
 *
 */
class FireAlarm extends Model
{
    use HasFactory;
    use AsSource;
    use Filterable;

    public $incrementing = false;

    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
    ];


    protected array $allowedFilters = [
        'name' => Like::class,
    ];
}
