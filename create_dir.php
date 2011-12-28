<?php
include('connect.php');
/**********************
File: createDir.php
Author: Frost
Website: http://www.slunked.com
***********************/
 if(isset($_SESSION['logged_in'])){
// set our absolute path to the directories will be created in:
$path = '/uploads/'.$_SESSION['username'].'';
if(isset($_POST['submit'])) {
  
  $dirname = $_POST['dirName'];
  
  mkdir("uploads/".$_SESSION['username']."/".$dirname, 0755);


}
  } else {

   print 'Login to create directory.';

  }
?>
<html>
<head><title>Make Directory</title></head>
<body>

<?php
 if(isset($_SESSION['logged_in'])){ print 'Heya '.$_SESSION['username'].''; } else { print 'MATA!'; }
 
 ?>
	<h2>Make Directory on Server</h2>
	<form name="phpMkDIRForm" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Enter a Directory Name (Alpha-Numeric only): <input type="text" value="" name="dirName" /><br />
	<input type="submit" name="submit" value="Create Directory" />
	</form>
</body>
</html>


<?php

 if(isset($_SESSION['logged_in'])){
   
   
function countFiles($directory){
    $files = array();
    $directory = opendir($directory);
    while($item = readdir($directory)){
    // We filter the elements that we don't want to appear ".", ".." and ".svn"
         if(($item != ".") && ($item != "..") && ($item != ".svn") ){
              $files[] = $item;
         }
    }
    $numFiles = count($files);
    return $numFiles;
}


     $directory = 'uploads/'.$_SESSION['username'].'/pictures01';
     

  print 'You have '.countFiles($directory).' files in this directory.';
  
  

 } else {
   
   print 'Log in';

 }
