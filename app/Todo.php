<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Todo extends Model
{
    
    protected $table = 'todos'; // table for this model
    
    public $timestamps = true;
    
    // protected $fillable = [
    //     'title', 'body',
    // ];
}