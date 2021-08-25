<!-- 

if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath = 'destination/' . $filename;
	if(!empty($filename) && file_exists($filepath)){

//Define Headers
		header("Cache-Control: public");
		header("Content-Description: FIle Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
		exit;

	}
	else{
		echo "This File Does not exist.";
	}
} -->

<?php
$file=$_GET['file'];

echo ($file);

if (($file != "") && (file_exists("destination/" . basename($file))))
{
$size = filesize("destination/" . basename($file));
header("Content-Type: application/force-download; name=\"" . basename($file) . "\"");
// header("Content-Transfer-Encoding: binary");
header("Content-Length: $size");
header("Content-Disposition: attachment; filename=\"" . basename($file) . "\"");
header("Expires: 0");
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
readfile("destination/" . basename($file));
exit();
}
?>