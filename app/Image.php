<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	protected $fillable = ['textboxID', 'imagePath', 'imageName', 'imageDescription'];
	
	public function textbox()
    {
        return $this->belongsTo('App\Textbox', 'textboxID');
    }
}
