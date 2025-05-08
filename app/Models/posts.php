<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
     use HasFactory;
    protected $guarded = []; 
    protected $table = 'posts'; // make sure this matches your DB table
    public function table_content()
    {
        return $this->hasMany(table_content::class, 'post_id');
    }
}
