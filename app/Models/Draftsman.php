<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Draftsman extends Model
{   
    public static function getOne($id)
    {
        return  Draftsman::find($id);
    }
    
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
