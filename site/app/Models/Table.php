<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'exhibitor_id', 'name', 'location'];

    public function exhibitor() {
        return $this->belongsTo(Exhibitor::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class, TagTable::class);
    }
}
