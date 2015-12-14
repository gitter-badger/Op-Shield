<?php

namespace main;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\server;
use pocketmine\level;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat as MT;
use pocketmine\utils\Config;
use pocketmine\OfflinePlayer;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\math\Vector3;

class AntiOpKick extends PluginBase implements Listener
{

public function onEnable()
{
        // Initializing config files
        $this->saveResource("config.yml");
        $yml = new Config($this->getDataFolder() . "config.yml", Config::YAML);
        $this->yml = $yml->getAll();
        $this->getLogger()->debug("Config files have been saved!");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getServer()->getLogger()->info(Color::BOLD . Color::GOLD . "M" . Color::AQUA . "TeamPvP " . Color::GREEN . "Enabled" . Color::RED . "!");
    }

public function onKick(PlayerKickEvent $event)
{
$player = $event->getPlayer();
if($player->isOp()){$event->setCancelled(\true);
   }
} 
public function onDisable()
{
$this->getLogger()->info(MT::RED."Anti_OP_Kick Is Unloaded!");
   }
}
