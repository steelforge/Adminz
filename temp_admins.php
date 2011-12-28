<?php

include('connect.php');

  $tadmins = mysql_query("SELECT id,name,data1,data2 FROM tem_admins");
           
           while($t = mysql_fetch_array($tadmins)) {
             
             $data1 = $t['data1'];
             $data2 = $t['data2'];
             
if(dateDiff($data1,$data2) == '0'){
  
$del = "UPDATE tem_admins SET data1 = '00-00-000' AND data2 = '00-00-000'";
                 $q = mysql_query($del) or die(mysql_error());
                 
                 print $del;

}
                    print ''.$t['name'].' - Expira: '.dateDiff($data1,$data2).' zile<br />';

           }
?>