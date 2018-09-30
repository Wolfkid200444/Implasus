<?php
/**
*
*
*  ___                 _                     
* |_ _|_ __ ___  _ __ | | __ _ ___ _   _ ___ 
*  | || '_ ` _ \| '_ \| |/ _` / __| | | / __|
*  | || | | | | | |_) | | (_| \__ \ |_| \__ \
* |___|_| |_| |_| .__/|_|\__,_|___/\__,_|___/
*               |_|  
*
* This program is free software: you can redistribute it and/or modify
* it under the terms of the GNU Lesser General Public License as published by
* the Free Software Foundation, either version 3 of the License, or any
* later version of this license.
*
* --==[×]==--
*
* > Team: ImpladeDeveloped
* > Link: http://github.com/ImpladeDeveloped
*
*
**/
declare(strict_types=1);

namespace {
    /** Will do it later. */
}

namespace Implasus {

    use pocketmine\utils\SoftwareLogger;
    use pocketmine\utils\SystemKiller;
    use pocketmine\utils\Console;
    use pocketmine\utils\Timezone;
    use pocketmine\utils\Utils;
    use pocketmine\utils\VersionString;
    use pocketmine\SetupWizard;
    
    const SOFTWARE_NAME = "Implasus";
    const API_VERSION = "4.0.0";
    const DEVELOPMENT_BUILD = true;
    const BUILD_NUMBER = 0;
    const MINIMUM_PHP_VERSION = "7.2.0";
    
    function critical_error($inMessage){
        echo "[ERROR] $inMessage" . PHP_EOL;
    }
	
    function check_platform_dependencies(){
        if(version_compare(MINIMUM_PHP_VERSION, PHP_VERSION) > 0){
            return [
                \Implasus\SOFTWARE_NAME . " is requires the PHP >= " . MINIMUM_PHP_VERSION . ", but you're currently have PHP " . PHP_VERSION . "."
            ];
        }
        $inMessages = [];
        if(PHP_INT_SIZE < 8){
            $inMessages[] = "Running the " . \Implasus\SOFTWARE_NAME . " with 32-bit PHP system is no longer supported. Please upgrade to a 64-bit system, or use a 64-bit PHP binary.";
        }
        if(php_sapi_name() !== "cli"){
            $inMessages[] = "You must run the " . \Implasus\SOFTWARE_NAME . " using the mode of CLI.";
        }
}
