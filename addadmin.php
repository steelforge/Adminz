<?php
include('connect.php');
 if(isset($_POST['submit'])) {
   
   $errorAdd = array();
   
    $admin = mysql_real_escape_string($_POST['username']);
    $pass =  mysql_real_escape_string($_POST['password']);
    $steamid =  mysql_real_escape_string($_POST['steamid']);
    $access =  mysql_real_escape_string($_POST['access']);
    $status =  mysql_real_escape_string($_POST['status']);

    $data = date('Y-m-d');

   if(empty($_POST['username'])) {
      $errorAdd[]= '<div class="error">Member field can&prime;t be empty. <a href="?club=add_member"><img src="images/CloseSquare.png" border="0" align="right"></a></div>';
    }

    if(empty($_POST['password'])) {
     $errorAdd[]= '<div class="error">WWW field can&prime;t be empty. <a href="?club=add_member"><img src="images/CloseSquare.png" border="0" align="right"></a></div>';
    } 
    
    if(empty($_POST['steamid'])) {
     $errorAdd[]= '<div class="error">VIP time is empty. <a href="?club=add_member"><img src="images/CloseSquare.png" border="0" align="right"></a></div>';
    }
    
    if(empty($_POST['status'])) {
     $errorAdd[]= '<div class="error">Status field can&prime;t be empty.< <a href="?club=add_member"><img src="images/CloseSquare.png" border="0" align="right"></a></div>';
    }
    

  if(!empty($errorAdd)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
	{
		foreach($errorAdd as $key => $value) /* walk through the array so all the errors get displayed */
		{
			echo $value; /* this generates a nice error list */
		}
	}
	else
	{

    //$q  = "INSERT INTO `users`(username, password, steamid,access, status, regdate) VALUES('$admin', '$pass', '$steamid', '$access', '$status', NOW())";
    //$query = mysql_query($q);

           //if($query){
          // print 'Member '.$admin.' added succesfuly! &nbsp; <a href="addadmin.php">Back</a>';
           // }


            include('ftp.class.php');
            $ftp = new ClsFTP();
            $userINI = $ftp->get('users.ini','/service37/cs/cstrike/addons/amxmodx/configs/users.ini');
            $ftp->close();

            $users = $userINI;
            $fh = fopen($users, 'a') or die("can't open file");
            $stringData = "\r\n".$admin." ".$pass." ".$access."\r\n";
            fwrite($fh, $stringData);

            $newftp = new ClsFTP();
            $userINI = $newftp->put('/service37/cs/cstrike/addons/amxmodx/configs/users.ini','users.ini');
            $newftp->close();

    }
  
 }else{
  
  print '<div class="inner">
    <table border="0" width="1200">
        <tr><th colspan="2" align="left"> Adauga admini.</th></tr>
 <form action="" method="POST">
  <tr><td> Admin name </td><td><input class="inputClass" type="text" name="username"></td></tr>
  <tr><td> Admin password </td><td><input class="inputClass" type="text" name="password"></td></tr>
  <tr><td> SteamID </td><td><input class="inputClass" type="text" name="steamid"></td></tr>
   <tr><td> Access flags </td><td><input class="inputClass" type="text" name="access"></td></tr>
  <tr><td> Status <br /> Verde inseamna activ si gri inseamna inactiv.</td><td>
  <input class="inputClass" type="radio" name="status" value="active"> <img src="images/active.png">
  <input class="inputClass" type="radio" name="status" value="inactive"> <img src="images/inactive.png"></td></tr>
  <tr><td><input type="submit" name="submit" id="submit" value=Submit /><input type="reset"></td></tr></table></div><br />';

 }
?>