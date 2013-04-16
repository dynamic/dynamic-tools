<?php

class CompanyConfig extends DataObjectDecorator {

	static $db = array(
    	'CompanyName' => 'Varchar(200)',
    	'PhoneNumber' => 'Varchar(20)',
    	'EmailAddress' => 'Varchar(100)',
    	'ShowDirections' => 'Boolean',
    	'Hours' => 'Text'
    );

	public function updateCMSFields(FieldList $fields) {
		
		$fields->addFieldsToTab('Root.Address', array(
			new HeaderField('CompanyInfo', 'Company Information'),
			new LiteralField('EnterInfo', 
				'<p>Enter your company contact information, which will be used throughout your website</p>'),
			new TextField('CompanyName', 'Company Name'),
			new TextField('PhoneNumber', 'Phone Number'),
			new TextField('EmailAddress', 'Email Address'),
			new TextareaField('Hours')
		));
		
		$fields->insertAfter(new CheckboxField('ShowDirections', 'Show Map and Driving Directions'), 'Country');
		
	}

}