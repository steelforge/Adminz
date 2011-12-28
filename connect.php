<?php
session_start();

     //Connection to mysql server
           $connect = mysql_connect('localhost', 'root', '') or die(mysql_errno());
           //Select database
                    mysql_select_db('adminz') or die(mysql_errno());
                    


        
        
  $server_name = 'RESPAWN.FORGAME.RO';

  function dateDiff($start, $end) {
  $start_ts = strtotime($start);
  $end_ts = strtotime($end);
  $diff = $end_ts - $start_ts;
  return round($diff / 86400);
}


                    
?>