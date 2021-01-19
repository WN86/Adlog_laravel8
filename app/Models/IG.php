<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IG extends Model
{
    //The error "Base table or view not found：1146Table" happened
    //when Laravel tried to guess the table name
    //fixed the error by specify the table name directly.
    public $table = "ig_projects";

    use HasFactory;

    protected $fillable = [
        'title','description','start','end','link'
    ];
}
