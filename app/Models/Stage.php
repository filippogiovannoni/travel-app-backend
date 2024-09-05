<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Day;

class Stage extends Model
{
    protected $fillable = ['title', 'description', 'latitude', 'longitude', 'stage_date', 'completed'];

    public function day()
    {
        return $this->belongsTo(Day::class);
    }



    use HasFactory;
}
