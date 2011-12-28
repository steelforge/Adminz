<head>
<style>
div.jsonSuggestResults {
	position:absolute;
	border-top: 0px;
	padding:0px;
	margin: 12px 4px;
	z-index:1;
}

div.jsonSuggestResults div.resultItem {
	margin:0px;
	padding:5px;
	position:relative;
	right: 88px;
	height:auto;
	cursor:pointer;
	width: 448px;
}

div.jsonSuggestResults div.resultItem.odd {
	background-color:#222;
	font-size: 11px;
	color: #edeeef;
	font-family: Arial;
	font-size: 12px;
}
div.jsonSuggestResults div.resultItem.even {
	background-color:#222;
	color: #edeeef;
	font-family: Arial;
	font-size: 12px;
}

div.jsonSuggestResults div.resultItem.hover {
	background-color:#333;
	color: #1692d9;
	font-family: Arial;
	font-size: 12px;
}

div.jsonSuggestResults div.resultItem img {
	float:left;
	margin-right:10px;
}

div.jsonSuggestResults div.resultItem p {
	margin:0px;
	padding:0px;
}

div.jsonSuggestResults div.resultItem p strong {

}

div.jsonSuggestResults div.resultItem p.extra {
	font-size: x-small !important;
	position:absolute;
	bottom:3px;
	right: 3px;
}
</style>
<script language="JavaScript" src="js/jquery.js"></script>
<script language="JavaScript" src="js/jquery.jsonSuggest.js"></script>
<script language="JavaScript" src="js/json2.js"></script>
<script language="JavaScript" src="js/data.js"></script>
<script>
function callback(item) {
	alert('You selected \'' + item.text + '\'\n\nHere is the full selected JSON object;\n' + JSON.stringify(item));
}

jQuery(function() {
  $.getJSON("suggestdata/amxcommands.txt",
		function(data){
			$('input#commandRcon').jsonSuggest(data, {maxResults: 5}, {width:400});
		}
	);


});

</script>
</head>
<p>Cu aceasta consola puteti trimite mesaje catre server ,ca <i>"amx_banip utilizator 0 aimhacking"</i>.Intotdeauna dupa ce da-ti comanda
  verificati ceea ce a-ti scris ,pentru ca este posibil sa scrieti gresit si serverul nu va lua comanda.</p>
<?php

if(isset($_POST['submit'])) {
  
  $command = $_POST['command'];
      $error = '';
      
$M=new Rcon();
$M->Connect("79.113.176.133","27015","12345");
$M->RconCommand("$command");


 $error = '<div class="messagecommand">Comanda trimisa '.$command.' &nbsp; <a href="index.php"><img src="images/window-close.png" border="0" align="right"></a></div>';
 //Asta cum fac sa o afisez in pagina index fara sa treaca la alta pagina?

      //  print 'The sent command is <i>"'.$command.'"</i><br /><a href="index.php">Send other commands</a>.'
  if(!empty($error)){
    echo $error;
  }

}
?>
<form action="" method="POST">
   <div class="commandInputer">
    CONSOLE <input type="text" name="command" id="commandRcon" class="inputcommands"/>
  
  <input type="submit" id="submit" name="submit" class="loginin" value="Send command">
   </div>
  </form>