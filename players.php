<?php

include 'rcon_hl_net.inc';
$M = new Rcon();
$M->Connect("94.176.166.22","27015","19891011");
//$p = $M->ServerInfo();
$info = $M->ServerInfo();
$p = $M->Players();

for($i = 1; $i <= $info["activeplayers"]; $i++)
  {
    

     print $p[$i]["name"].'<br />';
     print $p[$i]["frag"].'<br />';
     print $p[$i]["time"].'<br />';

  }

?>