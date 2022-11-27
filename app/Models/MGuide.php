<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MGuide extends Model
{
    use HasFactory;

    public function guideStep(){
        return $this->hasMany(MGuideStep::class, "guide_id", "id");
    }
}
