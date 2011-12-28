<style>

       body {
         background: #272727;
         font-variant: small;
        font-size: 0.8em;
        line-height: 1.5em;
        font-family: verdana,sans-serif;
        color: #777;
       }
       
       a{
         text-decoration: none;
         color: #1692d9;
         outline: none;
       }


       
       a.link {
         text-decoration: none;
         color: #1692d9;
         font-size: 1em;
         line-height: 1.5em;
         outline: none;
       }
       
       a.link:hover {
         text-decoration: none;
         color: #1692d9;
         font-size: 1em;
         line-height: 1.5em;
         outline: none;
       }
       
       
       .container {
        margin: 0px auto;
        width: 1200px;
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
       
       .commandInputer  {
        position: relative;
        top: 1px;
        left: 4px;
        width: 600px;
        padding: 10px;
        border: 1px solid #555;
        background: #222;
        border-radius: 3px;
        color: #454545;
        font-size: 15px;
        font-weight: bold;
        -moz-border-radius: 4px;
       }
       
       .inputcommands {
        position: relative;
        top: 1px;
        left: 4px;
        width: 380px;
        padding: 5px;
        border: 0px;
        border-bottom: 1px solid #444;
        font-family: verdana,sans-serif;
        background: #222;
        border-radius: 3px;
        color: #edeeef;
        font-size: 12px;
        font-style: italic;
       }

       .wrapper {
        margin-left: 0px;
        margin-right: 0px;
        border: 1px solid #565656;
	background: #333;
        padding: 10px;
        width: 640px;
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
       
       
       
       #players {
	border-bottom: 1px solid #333;
	background: #444;
        font-variant: small;
        font-size: 0.9em;
        line-height: 1.5em;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        color: #777;
        padding: 7px;
       }

       #players td {
        font-size: 12px;
       }
       
       #players th {
        font-size: 12px;
        text-align: left;
       }
       
       #players td a,a:hover {
         text-decoration: none;
         color: #1692d9;
         font-size: 12px;
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
       
       #demos {
	border-bottom: 1px solid #333;
	background: #444;
        font-variant: small;
        font-size: 0.9em;
        line-height: 1.5em;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        color: #777;
        padding: 7px;
       }
       
       .demos td {
        font-size: 12px;
       }
       
       .demos th {
        font-size: 12px;
        text-align: left;
       }
       
       .demos td a,a:hover {
         text-decoration: none;
         color: #1692d9;
         font-size: 18px;
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
        background: #333 url(images/black-grad.png) repeat-x bottom;
        border-bottom: 1px solid #454545;
        padding: 7px;
       }
       
       .last td a,a:hover {
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         color: #1692d9;
         font-size: 14px;
         text-decoration: none;
         outline: none;
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
            
            
       .titlelinks {
       padding: 4px;
       font-family: "Trebuchet MS", Helvetica, sans-serif;
       font-weight: bold;
       font-size: 14px;
       padding: 7px;
       color: #1692d9;
       text-align: left;
       text-decoration: none
       }
       
       .titlelinks:hover {
       padding: 4px;
       font-family: "Trebuchet MS", Helvetica, sans-serif;
       font-weight: bold;
       font-size: 14px;
       padding: 7px;
       color: #1692d9;
       text-align: left;
       text-decoration: none
       }
       
       .server {
       padding: 4px;
       font-family: "Trebuchet MS", Helvetica, sans-serif;
       font-weight: 1200;
       padding: 4px;
       color: #edeeef;
       text-align: left;
       text-decoration: none
       }


       
       strong {
         font-size: 21px;
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
         
         
         .dcount {
           float: right;
         }
         
         form {
           background: #444;
           padding: 4px;
         }
         
         .loginin {
          background: url(images/lmenuhov.png);
          border: 1px solid #15a9eb;
          -moz-border-radius: 3px;
          border-radius: 3px;
          -webkit-border-radius: 3px;
          position: relative;
          left: 7px;
          color: #fff;
          outline: 4px solid #222;
          -moz-outline-radius: 3px;
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
         
         .link-ban {
          background: url(images/lmenuhov.png);
          border: 1px solid #15a9eb;
          outline: 4px solid #222;
          -moz-outline-radius: 3px;
          -moz-border-radius: 3px;
          border-radius: 3px;
          -webkit-border-radius: 3px;
          position: relative;
          font-size: 15px;
          right: 10px;
          color: #fff;
          padding: 2px;
          display: inline-block;
          width: 130px;
          text-align: center;
          float: right;
         }
         
         .link-ban a {
           outline: none;
         }
         
         .messagecommand {
          background: #222;
          padding: 10px;
          -moz-border-radius: 4px;
          color: #85c051;
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         font-variant: small;
         font-size: 14px;
         width: 440px;
         margin-left: 10px;
         }


</style>

<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript">
refreshdiv();
</script>

<?php

include('connect.php');

include 'rcon_hl_net.inc';
$M = new Rcon();
$M->Connect("94.176.166.22","27015","19891011");
//Kevin $M->Connect("94.176.166.22","27015","19891011");


if(!$M->IsConnected()){
  $serverstatus =  '<span class="red">Offline</span>';
  exit;
}else{
  $serverstatus =  '<span class="green">Online</span>';
}

$ret=$M->ServerInfo();

$players=$M->Players();

function demoCount($userid){
  
  $query = "SELECT COUNT(demo_userid) FROM `demos` WHERE `demo_userid` = '".$userid."'";
        $result = mysql_query($query) or die(mysql_error());
        $numberofresults = mysql_result($result, 0);
        return round($numberofresults);
        }

                       if(isset($_GET['action'])){
                         $action = $_GET['action'];
                         
                         switch($action){
                           
                           case 'login':
                           
                                                 	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
                      	echo '
                       <div class="login">
                       <form method="post" action="">
			Username: <input class="inputer" type="text" name="username" /> &nbsp;
			Password: <input class="inputer" type="password" name="password">
			<input type="submit" class="loginin" value="Login" />

		 </form>
                 </div><br /><br />
                 ';
		 
		 
		   } else {
                        
                        

                 

                      $sql = mysql_query("SELECT username,password,userid FROM users WHERE
						username = '" . mysql_real_escape_string($_POST['username']) . "'
					AND
						password = '" . $_POST['password'] . "'") or die(mysql_errno());

                      if(mysql_num_rows($sql) == 0){
                        
                        print 'Ai introdus parola sau username-ul gresit.';
                        
                      } else {
                        
                             $_SESSION['logged_in'] = true;

                             while($row = mysql_fetch_assoc($sql)){
                               
                               $_SESSION['userid'] = $row['userid'];
                               $_SESSION['username'] = $row['username'];
                               
                               $sessu = $_SESSION['username'];
                               
                               global $sessu;
                             }
                             
                             print '<div class="green">'.$_SESSION['username'].' you succesfully logged in ,click <a href="index.php">HERE<a/></div>';
                             
                      }
                      
                      }
                      
                      break;
                      
                      case 'logout':
                           if(isset($_SESSION['logged_in']) == true)
{
  

	//unset all variables
	$_SESSION['logged_in'] = NULL;
	$_SESSION['username'] = NULL;
	$_SESSION['userid']   = NULL;

        header('Location: index.php');
}
else
{
	echo 'You are not signed in. Would you <a href="signin.php">like to</a>?';
}
                      
                      
                      break;
                      
     } 
     
 }


 if(isset($_SESSION['logged_in'])){

print '<div style="padding: 10px; width: 160px;">Heya, '.$_SESSION['username'].' <a class="link" href="?action=logout"><img src="images/window-close.png" border="0" align="right"></a></div>';

 } else {
  print '<a class="link" href="?action=login">Login</a><br /><br />';
 }
 
 print '<div class="container"><br />';

           print '<table  class="last" width="1188" cellspacing="0" cellpadding="0">
           <tr><th colspan="2"> <div class="title">'.$ret['name'].'.</div> </th></tr>
           ';
         $mssql = mysql_query('SELECT * FROM demos ORDER BY id DESC LIMIT 3') or die(mysql_error());
            while($top = mysql_fetch_assoc($mssql)){
              
             print '
             <tr><td>'.$top['demo_owner'].' banned <b>'.$top['demo_user'].'</b> ,<i>added by '.$top['demo_owner'].' on date '.$top['d_data'].'.</i></td><td> <a href="demo.php?page=demoInfo&id='.$top['id'].'&demo_owner='.$top['demo_owner'].'"><div class="link-ban">View ban info</div></a> </td></tr>';


            }
            
            print '</table>';

         print '<div class="wrapper">';



         $staff = mysql_query('SELECT * FROM users ORDER BY userid DESC LIMIT 1') or die(mysql_error());
         while($luser = mysql_fetch_assoc($staff)){
         print 'Last admin added is <a class="links">'.$luser['username'].'</a> ';
         }
         $sql = mysql_query('SELECT * FROM users ORDER BY userid DESC') or die(mysql_error());
         print 'and '.mysql_num_rows($sql).' admins in database.<br /><br />';
         while($f = mysql_fetch_array($sql)){
         if($f['status'] == 'active'){

                           $status = 'images/active.png';
                           
                         } elseif($f['status'] == 'inactive'){
                           
                           $status = 'images/inactive.png';
                           
                         }
                         
$userid = $f['userid'];
$username = $f['username'];

global $userid;


                         print '
                         <div class="demos">
                             <span style="position: relative; top: 3px; left: 4px; float: left;"><img src="'.$status.'"></span>
                         <a class="titlelinks" href="demo.php?page=userDemos&username='.addslashes($f['username']).'">'.addslashes($f['username']).'</a>
                               <span class="dcount"><i><strong>'.demoCount($userid).'</strong> demos</i></span>
                         </div>';
                       }
                       
                       



include('rconSendCommands.php');

  print '<table class="demos" width="100%">
  <tr><td> 
  <a href="loguri.php"><div class="buttons">Log-uri server</div></a>
  <a href="laddadmin.php"><div class="buttons">Adauga admin</div></a>
  <a href="logz.php"><div class="buttons">Log-uri complete</div></a>
  </td></tr></table>
  ';
print '</div>
<div class="wrapper2">';

print '<div id="demos">';
   print '<table class="demos"  width="100%">';
   $ret['game'] = 'Counter - strike';
print '<tr><td width="120">Server ip</td><td class="server">'.$ret['ip'].'</td></tr>';
print '<tr><td>Server name</td><td class="server">'.$ret['name'].'</td></tr>';
print '<tr><td>Current map</td><td class="server">'.$ret['map'].'</td></tr>';
print '<tr><td>Server mod</td><td class="server">'.$ret['mod'].'</td></tr>';
print '<tr><td>Server status</td><td class="server">'.$serverstatus.'</td></tr>';
print '<tr><td>Game</td><td class="server">'.$ret['game'].'</td></tr>';
print '<tr><td>Players</td><td class="server">'.$ret['activeplayers'].'/'.$ret['maxplayers'].'</td></tr>';
print '<tr><td valign="top">Map</td><td class="server">

<img src="maps/'.$ret['map'].'.jpg">

</td></tr>';
print '</table>
  <p>Jucatori conectati azi ,verifica <a class="link" href="connectedplayers.php">lista</a>.</p>
';


include('playerstable.php');




	print '</div>';
                                    
                                    print '</div></div>';




?>
                         
