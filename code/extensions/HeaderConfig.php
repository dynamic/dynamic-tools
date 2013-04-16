<?php
class HeaderConfig extends DataObjectDecorator {

	static $db = array(
		'TitleLogo' => 'enum("Logo, Title")'
	);
	
	static $has_one = array(
		'Logo' => 'Image'
	);
	
	static $defaults = array(
		'TitleLogo' => 'Title'
	);
	
    public function updateCMSFields(FieldList $fields) {
    
		$ImageField = new FileUploadField('Logo');
		$ImageField->getValidator()->allowedExtensions = array('jpg', 'gif', 'png');
		$ImageField->setFolderName('Uploads/Logo');
		$ImageField->setConfig('allowedMaxFileNumber', 1);
		
		// options for logo or title display
		$logoOptions = array('Title' => 'Display Site Title and Slogan', 'Logo' => 'Display Logo');
		
		$fields->addFieldsToTab('Root.Template', array(
			new HeaderField('TemplateHeader', 'Template'),
			new LiteralField('EditHeader', '<p>Edit the Template of your website</p>'),
			new HeaderField('Header', 'Header Settings', 3),
			new OptionsetField('TitleLogo', 'Branding', $logoOptions),
			$ImageField//,
   			//HeaderField::create('DisplayOptions', 'Display Options'),
   			
		));
		        		
    }
                  
}