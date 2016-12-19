<?php

namespace ShangriLa;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'judul',
        'content',
        'image'
    ];
}
