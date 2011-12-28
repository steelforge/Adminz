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
         font-size: 11px;
         float: right;
         }
         
         .red {
         color: #df2d2d;
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         font-variant: small;
         font-size: 11px;
         float: right;
         }
            

</style>


<div class="container">
<?php
include('connect.php');

                       $sql = "SELECT DISTINCT Name,ID,Frags,Time,Ping,WonID,Ip FROM players GROUP BY WonID";
                       $int = mysql_query($sql);
                       
                        $countp = mysql_num_rows($int);
                        
print '<div class="buttons"><a href="index.php" class="">Back</a></div><span class="title" colspan="10">Lista jucatori.
('.$countp.')
</span><br /><br />
<table width="99%" align="center" class="last" cellpadding="0" cellspacing="0" border="0">
<tr><tr><th> ID </th>
<th> Name </th>
<th> Frags </th>
<th> Time </th>
<th> Ping </th>
<th> WONID </th>
<th> IP </th>
</tr>';

                                
                                while($p = mysql_fetch_array($int)){
                                  
                                  if(mysql_num_rows($int) == 0){
                                    
                                    print 'No results!';
                                  } else {
                                    
                                    $steamID = $p['WonID'];

                                    $regex = "/^STEAM_0:[01]:[0-9]{8,9}$/";
                                    if(!preg_match($regex, $steamID)) {
                                    $steamI = "<span class='red'>(STEAM ID Invalid)</span>";
                                    }else{
                                      $steamI = "<span class='green'>(STEAM ID valid)</span>";
                                    }


                                    print '<tr>
                                    <td>'.$p['ID'].'</td>
                                    <td>'.$p['Name'].'</td>
                                    <td>'.$p['Frags'].'</td>
                                    <td>'.$p['Time'].'</td>
                                    <td>'.$p['Ping'].'</td>
                                    <td>'.$steamID.' '.$steamI.'</td>
                                    <td>'.$p['Ip'].'</td><tr>';
                                    

                                    
                                  }
                                  
                                }
?>
</table>
</div>