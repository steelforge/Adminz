<style>

       body {
         background: #272727;
         font-variant: small;
        font-size: 0.8em;
        line-height: 1.5em;
        font-family: verdana,sans-serif;
        color: #777;
       }
       
       
       a ,a:hover {
         text-decoration: none;
         color: #edeeef;
         font-size: 1em;
         line-height: 1.5em;
       }
       
        .container {
        margin: 0px auto;
        width: 1200px;
        border: 1px solid #444;
        float: left;
        padding: 20px;
        background: #222;
       }
       
        .header {
        width: 1180px;
	border-top: 1px solid #edeeef;
        font-variant: small;
        font-size: 14px;
        line-height: 1.5em;
        font-family: verdana,sans-serif;
        color: #edeeef;
        padding: 10px;
       }

       .demos {
        width: 230px;
	border-top: 1px solid #edeeef;
	border: 4px solid #222;
        background: url('images/cdemo.png');
        font-variant: small;
        font-size: 0.8em;
        line-height: 1.5em;
        font-family: verdana,sans-serif;
        color: #edeeef;
        float: left;
       }

       .demos td {
         padding: 7px;
         text-align: left;
       }
       
       .demoCount {
        margin-left: 0px;
        margin-right: 0px;
        border: 1px solid #565656;
	background: #222;
        padding: 8px;
        width: 1100px;
        -webkit-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        -moz-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
       }
       
       .demos a {
       color: #edeeef;
       font-size: 1.1em;
       line-height: 1.5em;
       }
       
       strong {
         font-size: 19px;
       }
       
       
       .demo-content {
        width: 900px;
        margin: 0px auto;
        padding: 10px;
        float: left;
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
       
       
       .small {
        font-size: 11px;
        font-weight: smaller;
        font-weight: normal;
        color: #676767;
       }
       
       
       .demo-file img {
         padding: 4px;
       }
       
       .demo-file {
        font-size: 11px;
        font-weight: smaller;
        font-weight: normal;
        color: #676767;
       }
       
       .imgdemo {
         float: left;
         position: relative;
         right: 7px;
       }
       
       .list-details em {
        color: #edeeef;
       }
       
       .list-details {
         position: relative;
         left: 38px;
       }
       
       .demo-file {
        border: 1px solid #333;
        position: relative;
        top: 10px;
        float: left;
        width: 300px;
       }
       
       .buttons {
          background: url(images/lmenuhov.png);
          border: 1px solid #15a9eb;
          outline: 1px solid #222;
          -moz-outline-radius: 3px;
          -moz-border-radius: 3px;
          border-radius: 3px;
          -webkit-border-radius: 3px;
          position: relative;
          font-size: 11px;
          color: #fff;
          padding: 4px;
          display: inline-block;
          width: 120px;
          text-align: center;
         }
         
         .buttons a {
           outline: none;
         }

</style>
<script language="JavaScript" src="js/jquery.js"></script>
<script src="js/jquery.MultiFile.js" type="text/javascript" language="javascript"></script>


<div class="container">

<?php

include('connect.php');


     if(isset($_GET['page'])){
       
       $page = $_GET['page'];
       
       
             switch($page){
               
               
                           case 'demo_view': 
                           
                           if(isset($_SESSION['logged_in'])){
                             
                             print 'Heya, '.$_SESSION['username'].', <a href="logout.php">Logout</a><br /><br />';

                                $sql = "SELECT id,demo_owner,demo_user,d_file,d_data,sessid FROM demos WHERE demo_owner = '".$_SESSION['username']."'";
                                  $querys = mysql_query($sql)or die(mysql_error());
                                     $countdemos = mysql_num_rows($querys);

                                        
print '<strong>'.$countdemos.'</strong> demo&prime;s uploaded.';
                                    
                                     while($d = mysql_fetch_assoc($querys)){

                                              print '
                                              <table border="0" class="demos">
                                                     <tr>
                                                         <td> '.$d['demo_owner'].' </td>
                                                         <td> <a href=?page=download&d_file='.$d['d_file'].'&id='.$d['id'].'&demo_owner='.$d['demo_owner'].'>'.$d['demo_user'].'&prime;s demo.</a> </td>
                                                         <td> '.date("d-m-Y", strtotime($d['d_data'])).' </td>
                                                         </tr></table>

                                                         ';
                                      //Close loop
                                     }
                                     
                           } else {
                             
                             header('location: login.php');
                           }
                                     
                                     break;
                                     
                                     
                                     case 'download':
                                     
                                          if(isset($_GET['d_file']) && ($_GET['demo_owner']) && ($_GET['id']) && is_numeric($_GET['id'])) {

                                            $id = $_GET['id'];
                                            $filename = $_GET['demo_owner'];
                                            $content = $_GET['d_file'];

                                            $query = "SELECT id,d_file FROM demos WHERE id = '$id'";
                                            $result = mysql_query($query) or die('Error, query failed');
                                            
                                            list($content,$id) =  mysql_fetch_array($result);
                                            
                                            header("Content-Disposition: attachment; filename=$filename");
                                            print $content;
                                            exit;
                                            }
                                            
                                            break;
                                            
                                           //Incarcare DEMO de catre utilizator spre Adminul respectiv.
                                           //Se pot incarca pana la 3 poze
                                           //Pozele se vor salva pe server si in baza de date.
                                            case 'upload_demo':
                                            
                                            if(isset($_GET['atasamente']) && ($_GET['owner'])){
                                              
                                              $_FILES['atasamente'] = $_GET['atasamente'];
                                              $owner = $_GET['owner'];
                                            

                                            }
                                            


                                            break;
                                            
                                            
                                            case 'userDemos':
                                            
                                            if(isset($_SESSION['logged_in'])){
                             
                                            print 'Heya, '.$_SESSION['username'].', <a href="logout.php">Logout</a><br /><br />';
                             
                                            }
                                            
                                            if(isset($_GET['username'])) {
                                              
                                              $username = mysql_real_escape_string($_GET['username']);

                                              $sql = "SELECT id,demo_owner,demo_user,d_file,d_data FROM demos WHERE demo_owner = '$username' ORDER BY id DESC";
                                              $querys = mysql_query($sql)or die(mysql_error());
                                              $countdemos = mysql_num_rows($querys);

                                              print '<div class="header">
                                              
                                              <a href="index.php">Back</a><br /><br />

                                              <strong>'.$username.'&prime;s BAN LIST</strong> <br /><br />
                                              <strong>'.$countdemos.'</strong> players banned.</div><br />';

                                              while($d = mysql_fetch_assoc($querys)){

                                              print '
                                              
                                              
                                              <div style="float: left;">

                                                   <div class="demos">

                                                      <div style="float: left; padding: 6px; margin-right: 2px;">
                                                                 <strong>'.$d['demo_user'].'&prime;s demo.</strong> <br />
                                                                 Banned on '.date("d-m-Y", strtotime($d['d_data'])).'.<br /><br />
                                                                 <a href="?page=demoInfo&id='.$d['id'].'&demo_owner='.$d['demo_owner'].'"><div class="buttons">View ban info</div></a>

                                                           </div>


                                                   </div>
                                                   
                                                   </div>





                                                         ';
                                      //Close loop
                                     }
                                            }
                                            
                                            break;
                                            
                                            case 'demoInfo':


                                            if(isset($_GET['id']) && is_numeric($_GET['id']) && ($_GET['demo_owner'])){

                                               $sqlint = mysql_query("SELECT * FROM demos
                                               WHERE id = '".mysql_real_escape_string($_GET['id'])."'
                                               AND demo_owner = '".mysql_real_escape_string($_GET['demo_owner'])."'") or die(mysql_error());
                                               
                                              $d = mysql_fetch_assoc($sqlint);

                                              $demoid = $d['id'];
                                              $owner = $d['demo_owner'];
                                              $banneduser = $d['demo_user'];
                                              $reason = $d['reason'];
                                              $demofile = $d['d_file'];
                                              $datebanned = $d['d_data'];
                                              
                                              global $owner;
                                              
                                              
                                              global $owner;
                                              
                                              if($demofile == FALSE){

                                                           $demo = '<a href=""><img src="images/demo.png" border="0" align="left"></a>';
                                              }elseif($demofile == TRUE){
                                                
                                                 $demo = '<a href="?page=download&id='.mysql_real_escape_string($_GET['id']).'&demo_owner='.mysql_real_escape_string($_GET['demo_owner']).'"><img src="images/demo.png" border="0"  align="left"></a>';
                                                 
                                              }
                                              
                                              print '
                                              <div class="demo-content">
                                              <div style="float: left; width: 500px;">
                                              <a href="demo.php?page=userDemos&username='.$owner.'">Back</a>
                                               <div class="title"><div class="imgdemo"><img src="images/demoinfo.png"></div>'.$banneduser.'&prime;s DEMO.<br />
                                               <span class="small"><i>Banat pe data de  '.date("d-m-Y", strtotime($datebanned)).',</i>
                                               de catre <b>'.$owner.'.</b></span></div>
                                               
                                               <div class="list-details">
                                               
                                                    <em>Motiv banare</em>: '.$reason.' <br />
                                                    <em>IP banat</em>: '.$d['ip'].' <br />
                                                    <em>Harta</em>: '.$d['map'].' <br />
                                                    <em>Data</em>: '.date("d-m-Y", strtotime($datebanned)).'. <br />

                                               </div>
                                              
                                              <div class="demo-file">'.$demo.' <p> Descarca '.$banneduser.'&prime;s DEMO</p>
                                              Tipul fisierului este "<i>.dem</i>".
                                              </div>
                                              </div>
                                              
                                              <div style="float: left;">
                                              <div class="">
                                              <form action="" enctype="multipart/form-data" method="POST">
                                              
                                                <input type=hidden name=MAX_FILE_SIZE value=20000000000000>
                                                <input name=atasamente class="multi" type=file id=atasamente>
                                                
                                                	<input type="submit" value="Incarca fisier" />
                                                </form>
                                              </div></div>
                                              ';
                                              print '</div>';


                                                                                          if(isset($_POST['submit'])){
                                            $target = "atasamente/";
                                            $target = $target . basename( $_FILES['atasamente']['name']);
                                            $fileName = $_FILES['atasamente']['name'];
                                            $tmpName  = $_FILES['atasamente']['tmp_name'];
                                            $fileSize = $_FILES['atasamente']['size'];
                                            $fileType = $_FILES['atasamente']['type'];

                                            $fp      = fopen($tmpName, 'r');
                                            $content = fread($fp, filesize($tmpName));
                                            $content = addslashes($content);
                                            fclose($fp);

                                            if(!get_magic_quotes_gpc())
                                            {
                                            $fileName = addslashes($fileName);
                                            }

                                            if(
                                            ($_FILES['atasamente']['type'] == "image/png") || ($_FILES['atasamente']['type'] == "image/jpg") ||
                                            ($_FILES['atasamente']['type'] == "text/html")||($_FILES['atasamente']['type'] == "text/css") ||
                                            ($_FILES['atasamente']['type'] == "image/gif") || ($_FILES['atasamente']['type'] == "application/x-rar-compressed") ||
                                            ($_FILES['atasamente']['type'] == "image/jpeg") || ($_FILES['atasamente']['type'] == "image/JPG") || ($_FILES['atasamente']['type'] == "image/JPEG")
                                            )                                         {

                                            $query = mysql_query("INSERT INTO 
                                            demos (pictures)
                                            VALUES ('$content') WHERE demo_owner = '$owner'")  or die (mysql_error());
                                            move_uploaded_file($_FILES['atasamente']['tmp_name'], $target);
                                            }
                                            }



                                            }


                                            break;


              //End switch
             }

              //End get page
     }
     
     

     
?>   

</div>
