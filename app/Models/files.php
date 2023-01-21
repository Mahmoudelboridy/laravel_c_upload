<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    use HasFactory;
    public $table="files";
    protected $fillable=[
        "file",
        "id",
        "name"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];

}