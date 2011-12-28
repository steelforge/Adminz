<?php
include 'rcon_hl_net.inc';
$M=new Rcon();
$M->Connect("94.176.166.22","27015","19891011");
$ret=$M->ServerInfo();


              print 'Server ip '.$ret['ip'].'<br />';
              print 'Server name '.$ret['name'].'<br />';
              print 'Current map '.$ret['map'].'<br />';
              print 'Server mod '.$ret['mod'].'<br />';
              print 'Game '.$ret['game'].'<br />';
              print 'Active players '.$ret['activeplayers'].'<br />';
              print 'Max players '.$ret['maxplayers'].'<br />';
?>