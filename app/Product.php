<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	
	public $fillable = ['name', 'image', 'quanty', 'value', 'sales', 'category_id'];


	public function category()
	{
		return $this->belongsTo('App\Category');
	}




}
