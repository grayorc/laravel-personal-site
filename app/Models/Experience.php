<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Experience extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'icon', 'items', 'user_id'];

    /**
     * @var string[]
     */
    protected $casts = [
        'items' => 'array'
    ];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * when item delete it removing image in storage
     *
     * @return void
     */
    public static function boot(): void
    {
        parent::boot();
        self::deleting(fn(Experience $experience) => Storage::disk('public')->delete($experience->icon));
    }
}
