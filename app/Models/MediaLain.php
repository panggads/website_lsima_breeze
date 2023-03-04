<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaLain extends Model
{
    use HasFactory;
    protected $table = 'media_lain';
    
    //protected $casts = [
    //    'tanggal' => 'date',
    //];
    
    protected $fillable = [
        'judul',
        'tanggal',
        'sumber',
        'cover',
    ];
    
}
