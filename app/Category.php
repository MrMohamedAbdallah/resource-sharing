<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected   $table = "cateogries",
                $primaryKey = "id",
                $fillable   = [
                    "name"
                ];
}
