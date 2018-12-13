//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if ( !defined( '\IPS\SUITE_UNIQUE_KEY' ) )
{
	exit;
}

class dcudash_hook_Theme extends _HOOK_CLASS_
{
	/**
	 * This method is executed when theme settings have changed from saveForm()
	 *
	 * @param	int		$setId		Theme set id
	 * @erturn  void
	 */
	public static function themeSettingsHaveChanged( $setId )
	{
		\IPS\dcudash\Dashes\Dash::deleteCachedIncludes();
		
		parent::themeSettingsHaveChanged( $setId );
	}

}
