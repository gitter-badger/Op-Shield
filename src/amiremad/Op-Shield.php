<?php

namspace amiremad\Op-Shield
 
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\utils\Config;
use pocketmine\event\Listener;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\OfflinePlayer;
use pocketmine\utils\TextFormat as coloring;
use pocketmine\event\player\PlayerPreLoginEvent
use pocketmine\event\player\

class Op-Shield extends PluginBase implements Listener
{
      public function onEnable()
    {
        // Initializing config files
        $this->saveResource("config.yml");
        $yml = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        $this->yml = $yml->getAll();
        $this->getLogger()->debug("Config files have been saved!");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info(coloring::GOLD . "Op-Shield" . coloring::green . "is loaded");
    }
      // opcantbekicked
      public function onKick(PlayerKickEvent $event)
      {
        $player = $event->getPlayer();
        if($player->isOp()){$event->setCancelled(\true);
      }
 
      // opcantbebanned
      public function onPreLogin(PlayerPreLoginEvent $event)
      {
        if($event->getPlayer()->isBanned() and $event->getPlayer()->hasPermission('opshield.avoid.ban')){
$event->getPlayer()->setBanned(false);
      }
      
      // disablestop
      public function onCommandPreprocess(PlayerCommandPreprocessEvent $e)
      {
        if($e->getMessage() === "/stop"){
            $e->getPlayer()->sendMessage("Sorry, stop Command Is Disabled.");
            $e->setCancelled();
        }
        
        // disable_ban
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/ban"){
            $e->getPlayer()->sendMessage("Sorry, ban Command Is Disabled.");
            $e->setCancelled();
        }
        
        // disable_ban-ip
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/ban-ip"){
            $e->getPlayer()->sendMessage("Sorry, ban-ip Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_banlist
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/banlist"){
            $e->getPlayer()->sendMessage("Sorry, banlist Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_checkperm
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/checkperm"){
            $e->getPlayer()->sendMessage("Sorry, checkperm Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_defaultgamemode
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/defaultgamemode"){
            $e->getPlayer()->sendMessage("Sorry, defaultgamemode Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_deop
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/deop"){
            $e->getPlayer()->sendMessage("Sorry, deop Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_difficulty
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/difficulty"){
            $e->getPlayer()->sendMessage("Sorry, difficulty Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_effect
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/effect"){
            $e->getPlayer()->sendMessage("Sorry, effect Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_enchant
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/difficulty"){
            $e->getPlayer()->sendMessage("Sorry, difficulty Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_difficulty
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/difficulty"){
            $e->getPlayer()->sendMessage("Sorry, difficulty Command Is Disabled.");
            $e->setCancelled();
        }
    }

        // disable_gamemode_command
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/gamemode"){
            $e->getPlayer()->sendMessage("Sorry, gamemode Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_give_command
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/give"){
            $e->getPlayer()->sendMessage("Sorry, give Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_help_command
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/help"){
            $e->getPlayer()->sendMessage("Sorry, help Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_kick_command
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/kick"){
            $e->getPlayer()->sendMessage("Sorry, kick Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_kill_command
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/kill"){
            $e->getPlayer()->sendMessage("Sorry, difficulty Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_list_command
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/difficulty"){
            $e->getPlayer()->sendMessage("Sorry, difficulty Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_me_command
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/me"){
            $e->getPlayer()->sendMessage("Sorry, me Command Is Disabled.");
            $e->setCancelled();
        }
    }
    
        // disable_op_command
        public function onCommandPreprocess(PlayerCommandPreprocessEvent $e){
        if($e->getMessage() === "/op"){
            $e->getPlayer()->sendMessage("Sorry, op Command Is Disabled.");
            $e->setCancelled();
        }
    }
