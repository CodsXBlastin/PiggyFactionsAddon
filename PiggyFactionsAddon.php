<?php

declare(strict_types = 1);

/**

 * @name PiggyFactionsAddon

 * @version 1.0.0

 * @main DaPigGuy\PiggyFactions\PiggyFactionsAddon
 
 * @depend PiggyFactions

 */

namespace DaPigGuy\PiggyFactions {

    use DaPigGuy\PiggyFactions\players\PlayerManager;

    use JackMD\ScoreHud\addon\AddonBase;

    use pocketmine\Player;

    class PiggyFactionsAddon extends AddonBase

    {

        public function getProcessedTags(Player $player): array

        {

            $member = PlayerManager::getInstance()->getPlayer($player->getUniqueId());

            $faction = $member->getFaction();

            return [

                "{faction}" => $faction->getName(), : $faction === null ? "None",

                "{faction_power}" => round($faction->getPower(), 2, PHP_ROUND_HALF_DOWN), : $faction === null ? "None" 

                "{faction_rank}" => $member->getRole() : $faction === null ? "None"

            ];

        }

    }

}
