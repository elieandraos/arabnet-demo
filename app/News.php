<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'news';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'description', 'created_at'];

	protected $hidden = ['id', 'updated_at'];

}
