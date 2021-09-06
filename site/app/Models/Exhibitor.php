<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibitor extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'full_name', 'slug', 'work_title', 'email', 'tel', 'cover_img', 'confirmed'];

    public function table() {
        return $this->hasOne(Table::class);
    }
}
