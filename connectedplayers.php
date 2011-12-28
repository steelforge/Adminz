<?php

include('connect.php');

$data = date('Y-m-d');

print $data;


   $sql = "SELECT DISTINCT Name,Frags,WonID,Ip FROM players WHERE date = '".$data."' GROUP BY Name";
   $int = mysql_query($sql);
   
        $conplayers = mysql_num_rows($int);
        
        print 'Conected players today , '.$conplayers.' players.<br /><br />';
        
                    while($c = mysql_fetch_array($int)) {
                       
                      print ''.$c['Name'].' '.$c['Frags'].' '.$c['Ip'].'<br />';
                      
                    }
                    
?>