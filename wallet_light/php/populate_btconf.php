<?php
    // ----------------------------------------------------------------------------
    // This file reads the input line of bitcoin.conf and populates the text boxes 
    // on the Controls page with these values.
    // ----------------------------------------------------------------------------
	global $param, $max_peers, $minrelaytxfee, $limitfreerelay;
    // $fh_2 = fopen ("/home/linaro/bconf", "r") or die ("Unable to open bconf file");
    // $fh_2 = fopen ("/home/linaro/bitcoin.conf", "r") or die ("Unable to open bconf file");
    $fh_2 = fopen ("/home/linaro/.bitcoin/bitcoin.conf", "r") or die ("Unable to open home/linaro/.bitcoin/bitcoin.conf");
	if ($fh_2) {
        while (($line = fgets($fh_2)) !== false) {
            $param = explode("=", $line);				 
			switch ($param[0]) {
                case "max_peers":
				    $max_peers=$param[1];
					break;
                case "minrelaytxfee":
				    $minrelaytxfee=$param[1];
					break;
                case "limitfreerelay":
				    $limitfreerelay=$param[1];
					break;
			}
		}
		fclose($fh_2);
	}
?>


