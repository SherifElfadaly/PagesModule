<?php namespace App\Modules\Pages;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model {

	/**
     * Spescify the storage table.
     * 
     * @var table
     */
	protected $table    = 'pages';

    /**
     * Specify the fields allowed for the mass assignment.
     * 
     * @var fillable
     */
	protected $fillable = ['title', 'page_slug', 'template', 'theme'];

	/**
	 * Get the name that will be displayed in the 
	 * menu link.
	 * 
	 * @return string
	 */
	public function getLinkNameAttribute()
	{
		return $this->attributes['title'];
	}
}
