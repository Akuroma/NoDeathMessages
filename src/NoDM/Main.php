<?php

namespace NoDM;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;

class Main extends PluginBase implements Listener{
    
    public $prefix = "§7[§cNo§9DM§7]";
    
    public function onEnable(){
        $this->getLogger()->info("NoDM was activated! By Aku");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onDisable(){
        $this->getLogger()->info("NoDM was deactivated!");
    }
    
    public function onPlayerDeath(PlayerDeathEvent $e){
        $e->setDeathMessage("");
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        switch($cmd->getName("nodm")){
            case "nodm":
                $sender->sendMessage($this->prefix . " §cNo§9DeathMessages §7(C) by Aku (2017)");
				$sender->sendMessage($this->prefix . " §aversion: 1.0");
                $sender->sendMessage($this->prefix . " §egithub.com/Akuroma");
        }
    }
}
