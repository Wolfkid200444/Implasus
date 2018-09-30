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
  
  public const DEFAULT_SERVER_NAME = "§f In §b" . \Implasus\SOFTWARE_NAME . "§f Server §r";
  public const DEFAULT_SERVER_PORT = 19132;
  public const DEFAULT_SERVER_GAMEMODE = 0;
  public const DEFAULT_PLAYER_SLOTS = 50;
	
  private $language;
	
  public function onConstruct() {
  }
  
  public function run() : bool{
      $this->inMessage(\Implasus\SOFTWARE_NAME . "'s Wizard setup!");
      try{
          $languages = Language::getLanguageList();
      }catch(LanguageMissing $eco){
          $this->getError("No language files found, please use provided builds or clone the repository recursively to add.");
          return false;
      }
      $this->inMessage("Please select a language for the software terminal.");
      foreach($languages as $shorter => $native){
          $this->inLine(" $native => $shorter");
      }do{
          $language = strtolower($this->getServerInput("Language", "english"));
          if(!isset($languages[$language])){
             $this->getError("Language not found in software.");
             $language = null;
           }
      }while($language === null);
      $this->language = new Language($language);
      $this->inMessage($this->language->get("selected_language"));
      }
      if(strtolower($this->getServerInput($this->language->get("skip_the_installer"), "n", "y/N")) === "y"){
         return true;
      }
      $this->inLine();
      $this->welcomer();
      $this->generateSoftwareConfig();
      $this->generateServerFiles();
      $this->NetworkServer();
      $this->endWizardSetup();
      return true;
   }
	
}
