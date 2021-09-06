<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagTable extends Model
{
    use HasFactory;

    protected $table = 'tag_table';
    protected $fillable = ['table_id', 'tag_id'];
}
