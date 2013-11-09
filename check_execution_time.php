<?php
    /**
    *   Проверяет сервер на максимальное время выполнения скрипта
    * 
    * Cron Jobs
    * * * * * * php /home/baikuz/public_html/domain.com/check_execution_time/check.php  
    *   
    *   Запрашивать http://www.domain.com/check.php?show=true
    * 
    * @author   Maxim Baikuzin <maxim@baikuzin.com>
    * @version  05.11.2013
    */
    
    
	set_time_limit(59*60); 
	ini_set('max_execution_time', 59*60);
	ignore_user_abort(true); 
	error_reporting(-1);
	


    // Показать результат
    $show = false;
	if (isset($_GET['show']))  $show = $_GET['show'];    
	if ($show) {
		for($h=0;$h<=23;$h++){
			$hour = $h;
			if (strlen($hour) == 1) $hour = '0' . $hour;
			for($m=0;$m<=59;$m++){
				$minute = $m;
				if (strlen($minute) == 1) $minute = '0' . $minute;
				$filename = __DIR__ . "/2013-11-05 $hour:$minute:00.txt";
				$handle = @fopen($filename, "r");
				if ($handle) {
				    $buffer = fgets($handle, 4096);
				    echo "2013-11-05 $hour:$minute:00 - $buffer <br />\r\n";
				    fclose($handle);
				}		
			}
		}
		exit;  		
	}        
	
	// Для запуска из cron
	$filename = __DIR__ . "/" . date("Y-m-d H:i") . ":00.txt";
  	for($i=0;$i<=3600;$i++){
  		$fp = fopen($filename, 'w');
		fwrite($fp, date("Y-m-d H:i:s"));
		fclose($fp);
		sleep(1);
	}
  


  
?>
