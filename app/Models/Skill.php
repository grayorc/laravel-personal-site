<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = ['name', 'skills', 'user_id','items'];

    protected $casts = ['items' => 'array'];

    protected $attributes = ['items' => '[]'];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
