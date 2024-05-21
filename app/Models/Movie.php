<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'original_title',
        'language',
        'date',
        'vote',
        'image'
    ];

    public function getDetails()
    {
        return "<strong>Titolo: </strong>" . $this->title . "<br> <strong>Trama: </strong><br>" . $this->original_title . "<br> <strong>Valutazione media: </strong>" . $this->vote;
    }
}
