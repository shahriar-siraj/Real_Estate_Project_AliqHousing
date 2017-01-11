<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	protected $fillable = ['categoryName'];

	public function textboxes()
    {
        return $this->hasMany('App\Textbox', 'categoryID');
    }
}
