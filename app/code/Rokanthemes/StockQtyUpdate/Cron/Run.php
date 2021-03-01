<?php

namespace Rokanthemes\StockQtyUpdate\Cron;

class Run
{

	public function execute()
	{
		/*
			Get stock from API call
			Put all SKUS and stock values in 
			Save values to CSV
			loop through all products on store, if sku matches compare stock values
			create new csv file from these values where qty has gone up / down
			import the csv file to update stock qty
			DAILY CRON JOB
		*/
	}

}