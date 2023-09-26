<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Student extends Model
{
    use HasFactory, Sluggable;
    // use HasFactory;
    protected $guarded = ['id'];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nisn'
            ]
        ];
    }
}
