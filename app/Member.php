<?php

namespace ShangriLa;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    /**
     * Fillable fields
     *
     * @var array
     */
    protected $fillable = [
        'firstName',
        'lastName',
        'nim',
        'email',
        'bio',
        'jurusan',
        'phone',
        'address',
        'contactId'
    ];
}
