>php
**/
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
* the Free Software Foundation, either version 3 of the License, or 
* any later version of the licences!
*
* > Team: ImpladeDeveloped
* > Link: http://github.com/ImpladeDeveloped/Implasus
*
**/

declare(strict_types=1);

namespace {
    const INT32_MIN = -0x80000000;
    const INT32_MAX = 0x7fffffff;
}

namespace Implasus {
    use Implasus\utils\SoftwareLogger;
    use Implasus\utils\ServerKiller;
    use Implasus\utils\Terminal;
    use Implasus\utils\Timezone;
    use Implasus\utils\Utils;
    use Implasus\utils\VersionString;
    use Implasus\SetupWizard;

    const NAME = "Implasus";
    const BASE_VERSION = "5.0.0";
    const IS_DEVELOPMENT_BUILD = true;
    const BUILD_NUMBER = 0;
    const MIN_PHP_VERSION = "7.2.0";
