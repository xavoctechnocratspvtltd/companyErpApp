<?php
class page_companyERP_page_owner_showsales extends page_companyERP_page_owner_home {
     //main page extend problm.....tab redundancy 
	function init()
	{
		parent::init();

		$this->add('Grid')->setModel('companyERP/Master_Sales');

			
	}
		
} 