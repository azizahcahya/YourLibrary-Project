<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hootlex\Moderation\Moderatable;

class Peminjaman extends Model
{
    use Moderatable;
    use HasFactory;
    // public $table = "peminjamen";
    protected $fillable = [
        'DateBorrowed',
        'title',
        'DueDate'
    ];

    protected $guarded = [

    ];
}
