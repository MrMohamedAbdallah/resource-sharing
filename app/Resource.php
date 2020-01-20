<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected   $table  = "resources",
                $primaryKey = "id",
                $fillable   = [
                    "url", "name", "stack_id", "category_id"
                ];
                
    /**
     * Relationship with the cateogry
     */
    public function category(){
        return $this->belongsTo("App\Category", "category_id", "id");
    }
}
