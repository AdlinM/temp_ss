<?php

namespace ShangriLa;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';
    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'deskripsi',
        'kategori',
        'waktuAcara'
    ];
}
