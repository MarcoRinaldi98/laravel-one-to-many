<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'slug',
        'type_id'
    ];

    public static function generateSlug(string $title)
    {
        return Str::slug($title, '-');
    }

    public function category()
    {
        return $this->belongsTo(Type::class);
    }
}
