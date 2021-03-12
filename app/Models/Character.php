<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public static function getOne($id)
    {
        return Character::find($id);
    }
    public function draftsman()
    {
        return $this->belongsTo(Draftsman::class);
    }
}
