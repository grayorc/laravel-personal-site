<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class BlogPost extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['user_id', 'title', 'content', 'thumbnail'];

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * when item delete it removing image in storage
     *
     * @return void
     */
    public static function boot(): void
    {
        parent::boot();
        self::deleting(function ($blogPost) {
            if ($blogPost->thumbnail) {
                Storage::disk('public')->delete($blogPost->thumbnail);
            }

            /**
             * search and destroy image post
             */

            preg_match_all('/<img src="([^"]+)"[^>]*>/', $blogPost->content, $matches);
            foreach ($matches[1] as $imagePath) {
                $path = str_replace(url('/storage'), '', $imagePath);
                Storage::disk('public')->delete($path);
            }
        });
    }
}
