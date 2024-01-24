<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classe';
    protected $primaryKey = 'Classe_Id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Classe_Id', 'Name', 'disabled', 'Professor_Id'
    ];

    
}