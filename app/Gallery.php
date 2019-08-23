<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = 'galleries';
    protected $primaryKey = 'galleryID';
    protected $fillable = ['img_title','image'];
}
