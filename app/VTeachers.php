<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class VTeachers extends Model
{
    protected $table = 'vprofessor';
    protected $primaryKey = 'User_Id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'User_Id', 'Firstname', 'Lastname', 'Username', 'Class', 'Profil'
    ];
}
