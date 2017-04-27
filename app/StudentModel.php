<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
	/**
     * The table associated with the model.
     * @access protected
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     * @access protected
     * @var array
     */
    protected $fillable = ['name','email','phone'];
}
