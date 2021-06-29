<?php

namespace App\Models;
use App\Models\Locatie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uren extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function Locatie()
    {
        return $this->hasOne(Locatie::class,  'id', 'locatie');
    }
}
