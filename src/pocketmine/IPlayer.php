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

namespace pocketmine;

use pocketmine\permission\ServerOperator;

interface IPlayer extends ServerOperator{

    /**
     * @return bool
     */
    public function isOnline() : bool;

    /**
     * @return string
     */
    public function getName() : string;

    /**
     * @return bool
     */
    public function isBanned() : bool;

    /**
     * @param bool $banned
     */
    public function setBanned(bool $banned);

    /**
     * @return bool
     */
    public function isWhitelisted() : bool;

    /**
     * @param bool $value
     */
    public function setWhitelisted(bool $value);

    /**
     * @return Player|null
     */
    public function getPlayer();

    /**
     * @return int|null
     */
    public function getFirstPlayed();

    /**
     * @return int|null
     */
    public function getLastPlayed();

    /**
     * @return bool
     */
    public function hasPlayedBefore() : bool;

}
