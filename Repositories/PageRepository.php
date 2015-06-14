<?php namespace App\Modules\Pages\Repositories;

use App\AbstractRepositories\AbstractRepository;

class PageRepository extends AbstractRepository
{	
	/**
	 * Return the model full namespace.
	 * 
	 * @return string
	 */
	protected function getModel()
	{
		return 'App\Modules\Pages\Pages';
	}

	/**
	 * Return the module relations.
	 * 
	 * @return array
	 */
	protected function getRelations()
	{
		return [];
	}

	/**
	 * Get all page based on the given theme.
	 * If the theme isn't given then get the default
	 * theme.
	 * 
	 * @param  string $theme
	 * @return collection
	 */
	public function getAllPages($theme = false)
	{	
		$theme = $theme ?: \CMS::coreModules()->getActiveTheme()->module_key;
		return $this->findBy('theme', $theme);
	}
}
