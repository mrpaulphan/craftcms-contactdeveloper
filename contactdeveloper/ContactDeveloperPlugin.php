<?php

namespace Craft;

class ContactDeveloperPlugin extends BasePlugin
{
	public function getName()
	{
		 return Craft::t('Contact Developer');
	}
	public function getVersion()
	    {
	      return '1.0';
	    }
	    public function getDescription()
	  	{
	  		return 'Simple Widget that allows clients to report an issue.';
	  	}
	    public function getDeveloper()
	    {
	      return 'Paul Phan';
	    }
	    public function getDocumentationUrl()
	    {
	      return 'https://github.com/mrpaulphan/craftcms-contactdeveloper';
	    }
	    public function getDeveloperUrl()
	    {
	      return 'http://mrpaulphan.com';
	    }
}
