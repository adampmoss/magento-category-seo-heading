<?php
/*
* SEO Heading Category Attribute Setup
*/

$installer = new Mage_Eav_Model_Entity_Setup('core_setup');
$installer->startSetup();

$installer->addAttribute('catalog_category', 'creare_category_heading', array(
	'group'         => 'General Information',
	'input'         => 'text',
	'type'          => 'varchar',
	'label'         => 'Category Heading',
	'visible'       => 1,
	'required'      => 0,
	'user_defined' => 1,
	'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE
	));

$installer->endSetup();