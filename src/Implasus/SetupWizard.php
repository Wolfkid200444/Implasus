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
* > Link: http://github.com/ImpladeDeveloped/Implactor
*
*
**/
declare(strict_types=1);
namespace Implasus;

use Implasus\languages\Language;
use Implasus\languages\LanguageMissing;
use Implasus\utils\Configuration;
use Implasus\utils\Internet;

class SetupWizard {
  
  public const DEFAULT_SERVER_NAME = "§f My §b" . \Implasus\NAME . "§f Server §r";
  public const DEFAULT_SERVER_PORT = 19132;
  public const DEFAULT_SERVER_GAMEMODE = 0;
  public const DEFAULT_PLAYER_SLOTS = 50;
	
  private $lang;
	
  public function onConstruct() {
  }
 
/* Starting to create all for wizard! */
	
}
