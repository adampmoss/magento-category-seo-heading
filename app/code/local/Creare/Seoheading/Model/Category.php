<?php

class Creare_Seoheading_Model_Category extends Mage_Catalog_Model_Category
{
	
	public function getName()
    {
		if (Mage::registry('current_category'))
		{
			if ($this->_getData('creare_category_heading'))
			{
				return $this->getCreareCategoryHeading();
			} else
			{
			return parent::getName();
			}
		} else
		{
			return parent::getName();
		}
	}	
	
}