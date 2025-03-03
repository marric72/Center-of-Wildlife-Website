<?php
/******************************************************************
 *  activityLogging.php  - These PHP functions handle logging activities to   
 *  files. 
 *
 *  Parameters:
 *  $log_name        -  The name of the log file to write to and path if not
 *                    the current directory.
 *  $remote_host     -
 *  $remote_addr     -
 *  $http_user_agent -
 *
 *  An example of a log file entry:
 *
 *  Display Strike Index Airport Statistics Results(Level IIA) for 
 *  /database/strike_index/KJFK.php by Unknown (172.19.9.8) using Mozilla/4.0
 *  (compatible; MSIE 6.0; Windows NT 5.1; SV1; MathPlayer 2.0; .NET CLR
 *  1.1.4322; InfoPath.1; .NET CLR 2.0.50727) - Tue Oct 3 2006 09:57:35 MST
 ******************************************************************/
function writeActLog($log_name, $remote_host, $remote_addr,
                  $http_user_agent, $page){

    //Don't log obvious internal use
    //my IP in 70C 172.19.203.241
    if(($remote_addr=="172.19.8.230")||($remote_addr=="67.61.146.62")||($remote_addr=="172.19.203.241")){
      //my office, don't log               //my home, laptop
             return;
    }
    if(substr_count($page,'icawrm')> 0){
      return;  //don't log access to backup
    }

    // Logging Activity
    if(empty($REMOTE_HOST)) { 
        $remote_host = "Unknown"; 
    }
    else { 
        $remote_host = $REMOTE_HOST;
    }

    $today = date("D M j Y H:i:s") . " MST";
    //echo "In writeLog: Ap_PWord=$Ap_PWord level= airport=$Airport<br>";  
    $fp = @fopen($log_name, "a");  //@will suppress error messages so they don't display on the page

    @fwrite($fp, $page . "|" . $remote_host . " (" . $remote_addr . ")|" . $http_user_agent . "|" . $today . "\n");

    @fclose($fp);
}

function recordActivity($remote_host, $remote_addr,
			  $http_user_agent, $page) {
  $log="/users/wildlfctr/logging/activity_log.txt";

  writeActLog($log, $remote_host, $remote_addr,                   
	   $http_user_agent, $page);

}

?>
