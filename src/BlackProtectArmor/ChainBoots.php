<?php

namespace BlackProtectArmor;

use pocketmine\item\ChainBoots as PMChainBoots;

class ChainBoots extends PMChainBoots
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
