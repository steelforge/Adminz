<style>

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
        margin: 0px auto;
        border: 1px solid #565656;
	background: #333;
        padding: 10px;
        width: 1140px;
        -webkit-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        -moz-box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
        box-shadow: inset 0 0 50px #454545, 0 0 30px #272727;
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
        font-size: 1.4em;
        line-height: 1.5em;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        color: #777;
        padding: 7px;
        margin-left: 4px;
       }
       
       .smalltext {
	border-bottom: 1px solid #333;
	background: #555 url(images/sub-navigation-bg.png) repeat-x top;
        font-variant: small;
        font-size: 0.9em;
        line-height: 1.5em;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        color: #777;
        padding: 7px;
        margin-left: 4px;
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
       color: #bdbebe;
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
         
         textarea {
           background: #222;
           border: 0px;
           padding: 7px;
           font-family: Microsoft Sans Serif;
           font-size: 14px;
           color: #787878;
         }
         
         .edit {
          background: url(images/lmenuhov.png);
          border: 1px solid #88ba01;
          -moz-border-radius: 3px;
          border-radius: 3px;
          -webkit-border-radius: 3px;
          position: relative;
          right: 17px;
          bottom: 27px;
          color: #111;
          float: right;
         }


</style>

<div class="wrapper">
<?php



if(isset($changefile)) {
$slash = stripslashes($_POST['filetest']);
$filetochange = "http://195.225.58.129/service37/cs/cstrike/addons/amxmodx/configs/users.ini";
$filetochangeOpen = fopen($filetochange,"w") or die ("Error editing.");
fputs($filetochangeOpen,$slash);
fclose($filetochangeOpen) or die ("Error Closing File!");
}
?>
<a href="index.php">Back</a>

<br /><br />

<div class="last">Editing file <?php print $filetochange = "users.ini"; ?>.</div>

<div class="smalltext">Schimbarea se face real-time deci nu este nevoie de
nici un refresh la pagina.Dupa apasarea butonului de Editeaza va aparea imediat si schimbarea adusa fisierului
in cauza ,dupa editare apasati butonul Back.</div> <br />

<form method=post action="">
<br />
<div align="center">
<textarea rows="20" cols="150" name="filetest" align="center">
<?php
// Implode CSS
$filetochange = "http://195.225.58.129/service37/cs/cstrike/addons/amxmodx/configs/users.ini";
print (implode("",file($filetochange,"r")));
?>
</textarea></div><br />

                <br />
	<input type="submit" value="Editeaza" name="changefile" class="edit">
	</form>
	
</div>
