<?php

namespace BlackProtectArmor;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;
use pocketmine\items;
use pocketmine\item\ItemFactory;

class Main extends PluginBase implements Listener{

public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this); 
    $this->getLogger()->info( "§aPlugin Chargé avec succès !");
    ItemFactory::registerItem(new ChainBoots(),true);
    ItemFactory::registerItem(new ChainChestplate(),true);
    ItemFactory::registerItem(new ChainHelmet(),true);
    ItemFactory::registerItem(new ChainLeggings(),true);
    }
}