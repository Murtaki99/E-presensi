<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Mapel extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];

    public function student()
    {
        return $this->hasMany(Student::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'mapel'
            ]
        ];
    }
}
