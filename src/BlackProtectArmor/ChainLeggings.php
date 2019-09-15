<?php

namespace BlackProtectArmor;

use pocketmine\item\ChainLeggings as PMChainLeggings;

class ChainLeggings extends PMChainLeggings
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
