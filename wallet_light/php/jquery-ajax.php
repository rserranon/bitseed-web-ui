<!-----------------------------------------------------------------------------------
Mods:    Konn Danley 
Company: Bitseed
File;    jquery-ajax.php
Date:    05/15/2016

Purpose: This file provides the callback for the button actions that iniitiate 
         software updates (Need to talk to Jay - we currently only have a 
         checkbox for auto update.  The other button actions are bitcoion restarts,
		 and device shutdown.

Originally forked from https://gitub.com mpatterson99/phpBitAdmin-Bitcoin-HTML5-Wallet 
-------------------------------------------------------------------------------------->

<?php

$domvalue = $_GET['id'];

// Bitcoin controls
switch ($domvalue) {
    // --------------------------------------------------------------------------------
    // 05/15/2016 KD - I don't think that we need this case anymore as this feature has
    // has changed methods.  	******** NEED TO TALK TO JAY **********
    // --------------------------------------------------------------------------------
    case "update-software":
	     echo "System Software is being updated";
		 shell_exec ('echo "2" > /home/linaro/updateflag');
	     break;
    // --------------------------------------------------------------------------------

    case "bitcoin_restart":
	     echo "Bitcoin is being restarted. Please wait 15 minutes before resuming operations";
		 shell_exec ('echo "1" > /home/linaro/restartflag');
	     break;

    case "bitcoin_restart_conf":
	     echo "Bitcoin is being restarted. Please wait 15 minutes before resuming operations";
		 shell_exec ('echo "1" > /home/linaro/restartflag');
		 break;

// Device Controls
    case "device_shutdown":
	     echo "Device is performing a safe shutdown";
		 shell_exec ('echo "2" > /home/linaro/restartflag');
		 break;
}

?>
