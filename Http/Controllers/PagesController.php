<?php namespace App\Modules\Pages\Http\Controllers;

use App\Http\Controllers\BaseController;

class PagesController extends BaseController {

	/**
	 * Create new PagesController instance.
	 */
	public function __construct()
	{
		parent::__construct('Pages');
	}

	/**
	 * Display a listing of pages.
	 * 
	 * @return respnonse
	 */
	public function getIndex()
	{
		$pages = \CMS::pages()->getAllPages();
		return view('pages::pages.viewpages', compact('pages'));
	}
}