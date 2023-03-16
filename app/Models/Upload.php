<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    use HasFactory;

    protected $table='upload';
    protected $fillable = [
        'title',
        'categories',
        'file',
        'user_id',
        
        // 'uploaded_by'
    ];
    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id')->withDefault(['name'=> '']);
    }
    public function categoryName(){
        return $this->belongsTo('App\Models\Categories', 'categories')->withDefault(['name'=> '']);
    }
}
