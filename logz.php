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
       
       .last td a,a:hover {
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         color: #15a9eb;
         padding-left: 10px;
         padding-right: 10px;
       }
       
       a,a:hover {
         font-family: "Trebuchet MS", Helvetica, sans-serif;
         color: #15a9eb;
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
            

</style>

<?php

 require('pagination.txt');
//Setam data ,deoarece log-urile se salveaza cu data curenta.
//BAN_HISTORY_12(luna)08(ziua)2011(anul).
$data = date('mdY');


//Fisierul care trebuie deschis si variabila pentru data.
//$fileOpen = 'logs/BAN_HISTORY_'.$data.'.log';

$fileOpen = 'logs/BAN_HISTORY_12102011.log';

chmod($fileOpen, 0755);

//Functia fopen pentru deschiderea fisierului .log
$tfile = @fopen($fileOpen, 'r');

print '
<a href="index.php" class="">Back</a><br /><br />
<table width="70%" align="center" class="last">
<tr><th class="title">LOG-uri din data de '.date('d-m-Y').'</th></tr>
<tr><td>
';


$pageabledata = new PageableFile($fileOpen);
// step 2 - create the pager
$pager = new Pager($pageabledata);
// step 3 - create the pagewriter
$pagewriter = new PageWriter($pager);
// step 4 - create the paginator
$paginator = new Paginator($pagewriter);
// step 5 - run the paginators
$paginator->run();
// setp 6 - output
$paginator->output();

print '
</td></tr></table>';
?>

