<?php

namespace MasterWolf;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

    private $piar = array(".ru",".cf",".net",".pro",".com",".co",".org",".info",".tk",".me",".cc",". ru",". net",". pro",". com",". co",". org",". info",". tk",". me",". cc",".RU",".NET",".PRO",".COM",".CO",".ORG",".INFO",".TK",".ME",".CC",". RU",". NET",". PRO",". COM",". CO",". ORG",". INFO",". TK",". ME",". CC",". Ru",". NET",". PRO",". COM",". Co",". ORG",". INFO",". Tk",". Me",". Cc",". rU",". NET",". PRO",". COM",". cO",". ORG",". INFO",". tK",". mE",". cC","Net","Pro","Com","Org","NEt","PRo","COm","ORg","nEt","pRo","cOm","oRg","nET","pRO","cOM","oRG","neT","prO","coM","orG","NeT","PrO","CoM","OrG","Info","INfo","INFo","iNFO","inFO","infO","InfO","InFo","iNFo",".Su",".su",".sU",".SU",". su",". Su",". sU",". SU" ); 
 
    public function onEnable(){
        $this->getLogger()->info("AntiAdvert by MasterWolf enabled =)");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function AntiAdvert(PlayerChatEvent $e){
        $player = $e->getPlayer();
        $message = $e->getMessage();       
        $ip = explode('.', $message);
        $il = explode('.', $message);
if(!$player->hasPermission("antiadvert")){
        if(sizeof($ip) >= 4){
            if(preg_match('/[0-9]+/', $ip[1])){
	               $e->setMessage("Play only on this server! It is the best!");
                
                 }
        }
        elseif(sizeof($il) >= 4){
            if(preg_match('/[0-9]+/', $il[1])){
	               $e->setMessage("Play only on this server! It is the best!");
                
                }
        }
        foreach($this->piar as $end){
            if (strpos($message, $end) !== false){
	               $e->setMessage("Play only on this server! It is the best!");
                
              }
        }
    }
}

    public function onDisable(){
        $this->getLogger()->info("AntiAdvert by MasterWolf disabled :D");
    }
}