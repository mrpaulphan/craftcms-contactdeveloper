<?php

namespace Craft;

class ContactDeveloperWidget extends BaseWidget
{
	protected $omg_so_handsome = 'http://i.imgur.com/WbKwPij.jpg';

	public function getName()
	{
		return Craft::t('Contact Developer');
	}
		public function getTitle()
	{
		return Craft::t('Report Issue to Developer');
	}

	public function getBodyHtml()
	{
		return craft()->templates->render('contactdeveloper/settings');
	}
}
