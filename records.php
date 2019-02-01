<?php

class service{

    public function get_service(){

    	$data = array(
 			 array('id'=>6605,
 			 	'user_name' => 'shoukat',
 			 	 'fundname' =>['fundone','fundtwo'],
				'bal'=>200000,
				'limit'=>140000,
				'remaining_bal'=>60000),

  			array('id'=>6604,
  				'user_name' => 'ali',
  				'fundname' =>['fundthree','fundfour'],
				'bal'=>400000,
				'limit'=>280000,
				'remaining_bal'=>120000),

  			 array('id'=>6603,
  			 	'user_name' => 'tanveer',
  			 	'fundname' =>['fundsix','fundseven'],
				'bal'=>1000000,

				'limit'=>700000,
				'remaining_bal'=>300000),

  			array('id'=>6602,
  				'user_name' => 'aslam',
  				'fundname' =>['fundnine','fundten'],
				'bal'=>2000000,
				'limit'=>1400000,
				'remaining_bal'=>600000),
 
  );

	
			
	return $data;
	
    }

}

?>