<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'location', 'image', 'gallery', 'description', 'price', 'area', 'bedroom', 'bathroom'];

    public function types()
    {
        return $this->belongsTo(Type::class);
    }

    public function statues()
    {
        return $this->belongsTo(Status::class);
    }
    public function aminities()
    {
        return $this->belongsTo(Aminity::class);
    }
}
