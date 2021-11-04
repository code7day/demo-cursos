<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Course;
/**
 * @property integer $id
 * @property integer $course_id
 * @property string $name
 * @property string $summary
 * @property int $number
 * @property string $content
 * @property boolean $active
 * @property Course $course
 */
class Lesson extends Model
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
    protected $fillable = ['course_id', 'name', 'summary', 'number', 'content', 'active'];

    /**
     * @return BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}
