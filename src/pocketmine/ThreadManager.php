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

use pocketmine\utils\MainLogger;

class ThreadManager extends \Volatile{

    /** @var ThreadManager */
    private static $instance = null;

    public static function init(){
        self::$instance = new ThreadManager();
    }

    /**
     * @return ThreadManager
     */
    public static function getInstance(){
        return self::$instance;
    }

    /**
     * @param Worker|Thread $thread
     */
    public function add($thread){
        if($thread instanceof Thread or $thread instanceof Worker){
            $this->{spl_object_hash($thread)} = $thread;
        }
    }

    /**
     * @param Worker|Thread $thread
     */
    public function remove($thread){
        if($thread instanceof Thread or $thread instanceof Worker){
            unset($this->{spl_object_hash($thread)});
        }
    }

    /**
     * @return Worker[]|Thread[]
     */
    public function getAll() : array{
        $array = [];
        foreach($this as $key => $thread){
            $array[$key] = $thread;
        }

        return $array;
    }

    public function stopAll() : int{
        $logger = MainLogger::getLogger();

        $erroredThreads = 0;

        foreach($this->getAll() as $thread){
            $logger->debug("Stopping " . $thread->getThreadName() . " thread");
            try{
                $thread->quit();
                $logger->debug($thread->getThreadName() . " thread stopped successfully.");
            }catch(\ThreadException $e){
                ++$erroredThreads;
                $logger->debug("Could not stop " . $thread->getThreadName() . " thread: " . $e->getMessage());
            }
        }

        return $erroredThreads;
    }
}
