<style>

td {
  border: 1px solid #333;
  padding: 7px;
  font-family: Arial;
  font-size: 11px;
}

th {
   text-align: left;
}


       body {
         background: #272727;
         font-variant: small;
        font-size: 0.8em;
        line-height: 1.5em;
        font-family: verdana,sans-serif;
        color: #777;
       }
       
       
       a.link ,a.link:hover {
         text-decoration: none;
         color: #777;
         font-size: 1em;
         line-height: 1.5em;
       }
       
       
       .container {
        margin: 0px auto;
        width: 1000px;
       }
       
       .login {
        margin-left: 0px;
        margin-right: 0px;
        border: 1px solid #565656;
	background: #333;
        padding: 8px;
        width: 480px;
        -webkit-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        -moz-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
       }
       
       .inputer {
        position: relative;
        top: 1px;
        left: 4px;
        width: 120px;
        padding: 3px;
        border: 1px solid #444;
        background: #222;
        border-radius: 3px;
        color: #454545;
        font-size: 15px;
        font-style: italic;
       }

       .wrapper {
        margin-left: 0px;
        margin-right: 0px;
        border: 1px solid #565656;
	background: #333;
        padding: 10px;
        width: 400px;
        -webkit-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        -moz-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        float: left;
        margin-left: 4px;
       }
       
       .wrapper2 {
        margin-left: 0px;
        margin-right: 0px;
        border: 1px solid #565656;
	background: #333;
        padding: 10px;
        width: 500px;
        -webkit-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        -moz-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        float: left;
        margin-left: 4px;
       }
       
       
       .demos {

	border-bottom: 1px solid #333;
	background: #444;
        font-variant: small;
        font-size: 0.9em;
        line-height: 1.5em;
       font-family: "Trebuchet MS", Helvetica, sans-serif;
        color: #777;
        padding: 7px;
       }
       
       
       .last {
	border-bottom: 1px solid #333;
	background: #444 url(images/sub-navigation-bg.png) repeat-x top;
        font-variant: small;
        font-size: 0.9em;
        line-height: 1.5em;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        color: #777;
        padding: 7px;
        float: left;
        margin-left: 4px;
       }
       
       .last td {
        background: #333;
        border-bottom: 1px solid #454545;
        padding: 7px;
       }
       
       .last th {
        background: #222;
        padding: 10px;
        font-size: 21px;
       }
       
       .last td a,a:hover {
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         color: #F08730;
         padding-left: 10px;
         padding-right: 10px;
       }
       
       a,a:hover {
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         color: #F08730;
         padding-left: 10px;
         padding-right: 10px;
       }
       


       .title {
       padding: 4px;
       font-family: "Trebuchet MS", Helvetica, sans-serif;
       font-weight: bold;
       font-size: 21px;
       padding: 7px;
       color: #edeeef;
       text-align: left;
            }
            
            .highlight {
              color: #edeeef;
            }
            
            td.h {
              background: #444;
              border-top: 1px solid #333;
            }
            

</style>

<?php

date_default_timezone_set('Europe/Bucharest');

//Setam data ,deoarece log-urile se salveaza cu data curenta.
//BAN_HISTORY_12(luna)08(ziua)2011(anul).
$data = date('mdY');


//Fisierul care trebuie deschis si variabila pentru data.
//$file= file('logs/BAN_HISTORY_'.$data.'.log');

$file= file('logs/BAN_HISTORY_12102011.log');

print '
 <a href="index.php" class="">Back</a><br /><br />
<table width="99%%" align="center" class="last" cellpadding="0" cellspacing="0" border="0">
<tr><th class="title" colspan="10">LOG-uri ban din data de '.date('d-m-Y').'</th></tr>
<tr><th> Log </th>
<th> Data </th>
<th> Actiune </th>
<th> Motiv banare </th>
<th> Perioada banului. </th>
';

$ouput = "";

for($i=0;$i<count($file);$i++) {
     if(strpos($file[$i],"Reason")) {
                              
     $file[$i];
          
         $out = explode('||', $file[$i]);

         if(substr($out[0],0,2)){
           
                        $logname = '<b>Log file</b>';
         }
         
        $reason = substr_replace(substr($out[1],0), '<span class="highlight">'.substr($out[1],0).'</span>', 0);


                print '<tr>
                <td>'.$logname.'</td>
                <td>'.substr($out[0],2,21).'</td>
                <td>'.substr($out[0],24).'</td>
                <td class="h">'.$reason.'</td>
                <td>'.substr($out[2],0).'</td>
                </tr>';
     }
}

?>

