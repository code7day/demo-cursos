<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Lesson;
/**
 * @property integer $id
 * @property string $category
 * @property string $name
 * @property string $image
 * @property string $description
 * @property boolean $active
 * @property Lesson[] $lessons
 */
class Course extends Model
{
    use HasFactory;
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = [
        'category',
        'name',
        'image',
        'description',
        'active',
    ];

    /**
     * @return HasMany
     */
    public function lessons(): HasMany
    {
        return $this->hasMany(Lesson::class);
    }
}
