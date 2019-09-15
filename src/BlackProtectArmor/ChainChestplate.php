<?php

namespace BlackProtectArmor;

use pocketmine\item\ChainChestplate as PMChainChestplate;

class ChainChestplate extends PMChainChestplate
{

    public function getDefensePoints() : int
    {
        return 45;
    }

    public function getMaxDurability() : int
    {
        return 54000;
    }

}
