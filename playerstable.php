<?php

require_once('rcon_hl_net.inc');
$M = new Rcon();
$M->Connect("94.176.166.22","27015","19891011");
$ret=$M->ServerInfo();
print '<table id="players" width="100%">
<tr><th> ID </th><th>Player name</th><th> Frags </th><th> Time </th><th> Ping</th><th> Ip </th></tr>
';
$activep = $ret['activeplayers'];

for($i = 1; is_array($ret) && $i <= $activep; $i++)
  {
    
    if($i < count($ret))
    {

     $p = array(
        @$ret[$i]["id"],
        @$ret[$i]["name"],
        @$ret[$i]["frag"],
        @$ret[$i]["time"],
        @$ret[$i]["ping"],
        @$ret[$i]["wonid"],
        @$ret[$i]["adress"],
        @$ret[$i]["kills"]
      );
      
      
      
      $q = mysql_query("INSERT INTO players
      (ID,Name,Frags,Time,Ping,WonID,Ip,date) VALUES('".$p[0]."',
      '".$p[1]."',
      '".$p[2]."',
      '".$p[3]."',
      '".$p[4]."',
      '".$p[5]."',
      '".$p[6]."',
      NOW())");
     

      if($p[4] < 60){
        
        $ping = 'green';
      }elseif($p[4] > 50){
        
        $ping = 'red';
      }

      print '<tr><td>'.$p[0].'</td>';
      print '<td><a href="http://www.gametracker.com/player/'.$p[1].'/'.$ret['ip'].'">'.$p[1].'</a></td>';
      print '<td>'.$p[2].'</td>';
      print '<td>'.$p[3].'</td>';
      print '<td><span class="'.$ping.'">'.$p[4].'</span></td>';
        print '<td>'.$p[6].'</td></tr>';
    
    } else {
      
      print '<span class="red">No players</span>';
    }

  }
  
  
  print '</table>';
  
?>