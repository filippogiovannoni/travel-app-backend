<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stage;

class Day extends Model
{
    protected $fillable = ['days_number', 'location'];

    public function stages()
    {
        return $this->hasMany(Stage::class);
    }


    use HasFactory;
}
