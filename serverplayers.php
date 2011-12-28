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
        border: 1px solid #565656;
	background: #333;
        padding: 10px;
        -webkit-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        -moz-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
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
	border: 1px solid #444;
	background: #444 url(images/sub-navigation-bg.png) repeat-x top;
        font-variant: small;
        font-size: 0.9em;
        line-height: 1.5em;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        color: #777;
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
         color: #edeeef;
         padding-left: 10px;
         padding-right: 10px;
       }
       
       a,a:hover {
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         color: #edeeef;
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
       position: relative;
       left: 30px;
            }
            
            .highlight {
              color: #edeeef;
            }
            
            td.h {
              background: #444;
              border-top: 1px solid #333;
            }
            
            .buttons {
          background: url(images/lmenuhov.png);
          border: 1px solid #15a9eb;
          outline: 4px solid #222;
          -moz-outline-radius: 3px;
          -moz-border-radius: 3px;
          border-radius: 3px;
          -webkit-border-radius: 3px;
          position: relative;
          font-size: 15px;
          left: 10px;
          color: #fff;
          padding: 6px;
          display: inline-block;
          width: 120px;
          text-align: center;
         }
         
         .buttons a {
           outline: none;
         }
         
                .green {
         color: #85c051;
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         font-variant: small;
         font-size: 14px;
         }
         
         .red {
         color: #df2d2d;
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         font-variant: small;
         font-size: 14px;
         }
            

</style>

<div class="container">
<?php

$file= file_get_contents('players.txt');

print '
<div class="buttons"><a href="index.php" class="">Back</a></div><span class="title" colspan="10">Lista jucatori.</span><br /><br />
<table width="99%" align="center" class="last" cellpadding="0" cellspacing="0" border="0">

<tr><th> ID </th>
<th> Name </th>
<th> Frags </th>
<th> Time </th>
<th> Ping </th>
<th> WONID </th>
<th> IP </th>
';

$out = explode('|', $file);

if($out[5] == 'STEAM_ID_LAN'){
  
  $LAN = 'Valve';
}


     print '<tr><td>'.$out[0].'</td>';
     print '<td>'.$out[1].'</td>';
     print '<td>'.$out[2].'</td>';
     print '<td>'.$out[3].'</td>';
     print '<td>'.$out[4].'</td>';
     print '<td>'.$out[5].' ('.$LAN.')</td>';
     print '<td>'.$out[6].'</td>';


?>
</div>

