<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    //Явная привязка к таблице
    protected $table = 'categories';

    //Правило, что можем изменять данные в таблице
    protected $guarded = false;
}
