<?php
    /**
    *   Check your shared web hosting for REAL max_execution_time
    * 
    * Cron Jobs
    * 	Every minute (* * * * *) php /...PATH.../web-hosting-tests/check_execution_time.php  
    *   
    *  Show results 
    * 	http://www.domain.com/web-hosting-tests/check_execution_time.php
    * 
    * @author	Maxim Baikuzin <maxim@baikuzin.com> 
    * 			http://www.baikuzin.com
    * @version	09.11.2013
    * @license 	GNU GPL version 3
    */
    
    

    
	ini_set('max_execution_time', 60*60);
	ignore_user_abort(true); 
	error_reporting(-1);
	

	
	// If script run from Cron
	if (!isset($_SERVER['REMOTE_ADDR'])) {
		$filename = __DIR__ . '/' . date("H:i") . ':00.txt';
  		for($i=0;$i<=3600;$i++){
  			$fp = fopen($filename, 'w');
			fwrite($fp, date("H:i:s"));
			fclose($fp);
			sleep(1);
		}
		exit;		
	} 	
	
    // Show results
    echo "&nbsp;&nbsp; Start &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp; Kill <br />\r\n"; 
	for($h=0;$h<=23;$h++){
		$hour = $h;
		if (strlen($hour) == 1) $hour = '0' . $hour;
		for($m=0;$m<=59;$m++){
			$minute = $m;
			if (strlen($minute) == 1) $minute = '0' . $minute;
			$filename = __DIR__ . "/$hour:$minute:00.txt";
			$handle = @fopen($filename, "r");
			if ($handle) {
				$buffer = fgets($handle, 4096);
				echo "$hour:$minute:00 - $buffer <br />\r\n";
				fclose($handle);
			}		
		}
	}
	

  


  
?>
