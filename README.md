check_execution_time.php
=================

Check maximum execution time, "process killed" on Shared Hosting. You can check your shared web hosting for REAL max_execution_time. Various lengthy cron jobs was killed at same time.


Add Cron Jobs
	Every minute (* * * * *) php /...PATH.../web-hosting-tests/check_execution_time.php  

Show results 
    http://www.domain.com/web-hosting-tests/check_execution_time.php
    
    
    
Result from BAD shared hosting:
   Start  -   Kill 
 12:40:00 - 12:40:07 
 12:41:00 - 12:50:04 
 12:42:00 - 12:50:04 
 12:43:00 - 12:50:03 
 12:44:00 - 12:50:04 
 12:45:00 - 12:50:04 
 12:46:00 - 12:50:04 
 12:47:00 - 12:50:04 
 12:48:00 - 12:50:05 
 12:49:00 - 12:50:05 
 12:50:00 - 12:50:10 
 12:51:00 - 12:55:02 
 12:52:00 - 12:55:02 
 12:53:00 - 12:55:03 
 12:54:00 - 12:55:03 
 12:55:00 - 12:55:07 


Result from GOOD shared hosting:
   Start  -   Kill 
 12:40:00 - 13:40:00 
 12:41:00 - 13:41:00 
 12:42:00 - 13:42:00 
 12:43:00 - 13:43:00 
 12:44:00 - 13:44:00 
 12:45:00 - 13:45:00 
 12:46:00 - 13:46:00 
 12:47:00 - 13:47:00 
 12:48:00 - 13:48:00 
 12:49:00 - 13:49:00 
 12:50:00 - 13:50:00 
 12:51:00 - 13:51:00 
 12:52:00 - 13:52:00 
 12:53:00 - 13:53:00 
 12:54:00 - 13:54:00 
 12:55:00 - 13:55:00 
	