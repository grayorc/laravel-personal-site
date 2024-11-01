<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SiteSetting extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'profile' ,'about_me', 'what_i_do', 'feedbacks_enabled', 'customers_enabled', 'social_media', 'address', 'email', 'telegram', 'user_id'
    ];

    /**
     * @var string[]
     */
    protected $casts = [
        'what_i_do' => 'array',
        'social_media' => 'array',
        'feedbacks_enabled' => 'boolean',
        'customers_enabled' => 'boolean',
    ];

    /**
     * when item delete it removing image in storage
     *
     * @return void
     */
    protected static function boot(): void
    {
        parent::boot();

        static::deleting(function ($siteSetting) {
            /**
             * remove profile image
             */
            if ($siteSetting->profile) {
                Storage::disk('public')->delete($siteSetting->profile);
            }

            /**
             * remove icons
             */
            if (is_array($siteSetting->what_i_do)) {
                foreach ($siteSetting->what_i_do as $item) {
                    if (isset($item['icon'])) {
                        Storage::disk('public')->delete($item['icon']);
                    }
                }
            }
        });
    }

    public function getTitle(){
        return $this->what_i_do[0]['title'];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
