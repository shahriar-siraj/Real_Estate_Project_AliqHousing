<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Textbox extends Model {

	protected $fillable = ['categoryID', 'textboxTitle', 'textboxText'];

	public function images()
    {
        return $this->hasMany('App\Image', 'textboxID');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'categoryID');
    }
}
