<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewsModel extends Model
{
    use SoftDeletes;
    protected $table = 'reviews';
    protected $guarded = ['image'];
    protected $dates = ['deleted_at'];

    public function category()
    {
        return $this->belongsTo('App\Models\CategoryModel');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function image()
    {
        return $this->belongsTo('App\Models\UploadModel','upload_id');
    }


}
