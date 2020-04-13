<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'fullname', 'email', 'password', 'dob', 'gender', 'details', 'admnumber', 'stype', 'father', 'fphone', 'mother', 'mphone', 'occupation', 'address', 'admDate', 'classAdm', 'photo', 'userid', 'status'
    ];
}