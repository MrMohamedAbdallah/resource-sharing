<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    protected   $table = "stacks",
                $primaryKey = "id",
                $fillable   = [
                    "name", "order", "description"
                ];

    
    /**
     * Relationshipt with resources
     */
    public function resources(){
        return $this->hasMany("App\Resource", "stack_id", "id");
    }
                
}
