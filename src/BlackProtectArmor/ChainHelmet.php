<?php

namespace BlackProtectArmor;

use pocketmine\item\ChainHelmet as PMChainHelmet;

class ChainHelmet extends PMChainHelmet
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
